<?php

if (!function_exists('view')) {

    function view($name, $data = null){
        return ['viewName' => "resources/views/{$name}.php", 'viewData' => $data];
    }
}