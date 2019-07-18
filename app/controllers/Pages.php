<?php

class Pages extends Controller
{
    public $id = 1;

    public function index() {
        $this->view('pages.index');
    }
}