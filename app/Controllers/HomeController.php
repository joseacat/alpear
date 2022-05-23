<?php

namespace App\Controllers;

use App\Models\User;
use App\Templates\Template;

class HomeController{


    public function index(){
        return \App\Templates\Template::view('index', ['title' => 'Titulo']);
    }
}
