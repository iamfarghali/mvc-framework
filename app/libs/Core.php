<?php

/**
 * App Core Class
 * Creates URLs & Loads core controller
 * URL FORMAT => /controller/method/params 
 */

 class Core 
 {
    private const CONTROLLERS_PATH = '../app/controllers/';
    private const MODELS_PATH      = '../app/models/';
    private const VIEWS_PATH       = '../app/views/';

    protected $currentController = 'Pages';
    protected $currentMethod     = 'index';
    protected $params            = [];

    public function __construct() {
        // get url array
        $url = $this->getUrl();

        // pasre the url
        $this->parseUrl($url);

        // load the controller
        $this->loadController();

        // call the method
        $this->callMethod();
    }

    private function getUrl() {
        return isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : false;
    }

    private function parseUrl($url) {
        $this->currentController = isset($url[0]) ? $url[0] : $this->currentController;
        $this->currentMethod     = isset($url[1]) ? $url[1] : $this->currentMethod;
        if (isset($url[2])) {
            for ($i = 0; $i < (count($url) - 2); $i++) {
                $this->params[$i] = $url[$i+2];
            }
        }
    }

    private function loadController() {
        require_once self::CONTROLLERS_PATH . $this->currentController . '.php';
        $this->currentController = new $this->currentController;
    }

    private function callMethod() {
        if (method_exists($this->currentController, $this->currentMethod)) {
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        } else {
            echo '404';
        }
    }

 }