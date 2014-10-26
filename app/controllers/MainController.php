<?php

class MainController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function __construct()
    {
        $pgname = str_replace('{lang?}/', '', Route::current()->uri());

        View::share('pgname', $pgname);
    }

	public function showIndex($locale = 'en')
	{
        $this->configureLocale($locale);

		return View::make('home', array('age' => $this->getAge()));
	}

    public function showTimeline($locale = 'en')
    {
        $this->configureLocale($locale);

        $tl = new Timeline();
        $events = $tl->getEventsForTimeline($this->getURLRoot());

        return View::make('timeline', array('events' => $events));
    }

    public function showResume($locale = 'en')
    {
        $this->configureLocale($locale);

        return View::make('resume');
    }

    public function showContact($locale = 'en')
    {
        $this->configureLocale($locale);

        return View::make('contact');
    }

    public function showUnderConstruction($locale = 'en')
    {
        $this->configureLocale($locale);

        return View::make('construction');
    }

    private function getAge()
    {
        $birthdate = new DateTime('14-06-1995');
        $today = new DateTime('today');

        return $birthdate->diff($today)->y;
    }

    private function configureLocale($locale)
    {
        $locale = strtolower($locale);
        $locales = array('nl' => 'nl', 'nl_nl' => 'nl',
                         'en' => 'en', 'us' => 'en', 'uk' => 'en', 'en_us' => 'en', 'en_uk' => 'en');

        if (in_array($locale, $locales)) {
            if (Lang::getLocale() != $locales[$locale]) {
                Lang::setLocale($locales[$locale]);
            }
        }

        View::share('url_root', $this->getURLRoot());
    }

    private function getURLRoot()
    {
        return Lang::getLocale() == 'en' ? '/en' : '/nl';
    }

}
