<?php

class Posts extends Controller
{
    private $model = null;

    public function __construct() {
        $this->model = $this->model('Post');

        // echo '<pre>';
        // print_r($this->model);
        // echo '</pre>';
    }

    public function index() {
       
    }
}