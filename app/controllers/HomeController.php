<?php

class HomeController extends BaseController {

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

	public function showIndex()
	{
		return View::make('home', array('age' => $this->getAge()));
	}

    public function showTimeline()
    {
        return View::make('timeline');
    }

    public function showResume()
    {
        return View::make('resume');
    }

    public function getAge()
    {
        $birthdate = new DateTime('14-06-1995');
        $today = new DateTime('today');

        return $birthdate->diff($today)->y;
    }
}
