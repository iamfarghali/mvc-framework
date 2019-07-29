<?php

class Pages extends Controller
{
    public function index() {
        $this->view('pages.index', ['title' => 'Homepage', 'welMsg' => 'Hi, There!']);
    }
}