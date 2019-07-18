<?php

class Controller
{
    // Load Model
    public function model($model) {

        if (file_exists('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';
            return new $model();
        }

        // If Model Not Exist
        return false;

    }

     // Load View
     public function view($view, $data = []) {
       
        // To support 2 formats (pages/about) and (pages.about) when write view path.
        $view = strpos($view, '.') ? str_replace('.', '/', $view) : $view;
        
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // If View Not Exist
            die('404 Page Not Found!');
        }

    }
}