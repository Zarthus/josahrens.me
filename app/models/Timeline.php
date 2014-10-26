<?php
/**
 * This class is probably relatively redundant.
 *
 * It's not here for convenience, but it's here for me to get a good understanding on how
 * Eloquent and Models work, and how to use them within Laravel.
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Timeline extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'timeline';
    protected $guarded = 'id';

    /**
     * If we checked if the tables have been created yet
     *
     * @var boolean
     */
    public $createdTables = false;

    /**
     * Check if table exists, create if it doesn't.
     *
     * @returns void
     */
    public function makeTable()
    {
        if ($this->createdTables === true)
            return;

        if (!Schema::hasTable($this->table)) {
            Schema::create($this->table, function($table) {
                $table->increments('id');
                $table->string('trans_name', 32)->unique();
                $table->date('date');
                $table->timestamps();
            });
        }

        $this->createdTables = true;
    }

    /**
     * Get array of all events
     *
     * @returns array
     */
    public function getEvents()
    {
        if (!$this->createdTables)
            $this->makeTable();

        return Timeline::all();
    }

    public function getEventsForTimeline($url_root = '/en')
    {
        $events = $this->getEvents();
        $timelineEvents = array();

        $tr_date = trans('timeline.date');

        foreach ($events as $event) {
            $tmp = [];

            $tmp['head'] = trans('timeline.' . $event['trans_name'] . '-head', array('urlroot' => $url_root));
            $tmp['body'] = trans('timeline.' . $event['trans_name'] . '-body', array('urlroot' => $url_root));
            $tmp['date'] = '';

            if ($event['date'] != '0000-00-00') {
                if (substr($event['date'], 5) == '01-01') {
                    $tmp['date'] = '<p>' . $tr_date . ': ' . substr($event['date'], 0, 4) . '</p>';
                } else {
                    $tmp['date'] = '<p>' . $tr_date . ': ' . $event['date'] . '</p>';
                }
            }

            $timelineEvents[] = $tmp;
        }

        return $timelineEvents;
    }

    /**
     * Add an event to the database
     *
     * @param $tr_name string translation name in /app/lang/../timeline.php minus -head/body
     * @param $date string yyyy-mm-dd or yyyy date
     * @returns false on fail, true on success
     */
    public function addEvent($tr_name, $date)
    {
        // Chop off prepending 'timeline.' (if applicable)
        if (substr($tr_name, 0, 9) == 'timeline.')
            $tr_name = substr($tr_name, 9);

        // Chop off appending head and body (if applicable)
        if (substr($tr_name, strlen($tr_name) - 5) == '-head' || substr($tr_name, strlen($tr_name) - 5) == '-body')
            $tr_name = substr($tr_name, 0, strlen($tr_name) - 5);

        // Validate it's alpha numeric (dashes allowed as well)
        if (!ctype_alnum(str_replace('-', '', $tr_name)) || !ctype_alnum(str_replace($date, array('/', '-'), '')))
            return false;

        if (!Schema::hasTable($this->table))
            $this->makeTable();

        Timeline::insert(array('trans_name' => $tr_name, 'date' => $date));
        return true;
    }

    /**
     * Delete an event from the table
     *
     * @param $id int row id to delete
     * @returns false on fail, int affected rows on success
     */
    public function deleteEvent($id)
    {
        return $this->deleteEvents($id, '=');
    }

    /**
     * Delete multiple events from the table by id
     *
     * @param $id int row id to delete
     * @param $operator string valid operator
     * @returns false on fail, int affected rows on success
     */
    public function deleteEvents($id, $operator)
    {
        if (!is_int($id) || is_string($id) && !is_numeric($id))
            return false;
        else
            $id = (int) $id;

        if (!in_array($operator, array('=', '>', '>=', '<', '<=')))
            return false;

        if (!Schema::hasTable($this->table))
            $this->makeTable();

        $arows = Timeline::where('id', $operator, $id)->delete();
        return $arows;
    }
}
