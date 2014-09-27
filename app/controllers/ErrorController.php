<?php

class ErrorController extends BaseController {

    public function showUnderConstruction()
    {
        return View::make('construction');
    }

}