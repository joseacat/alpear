<?php

namespace App\Controllers;

use App\Models\User;

class HomeController{

    /**
     * Index
     * @return array
     */
    public function index(){
        return view('index', array('jose', 'antonio'));
    }
}
