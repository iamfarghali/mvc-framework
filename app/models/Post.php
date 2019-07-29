<?php

class Post {
    private $db = null;

    public function __construct() {
        $this->db = new Database;
    }
}