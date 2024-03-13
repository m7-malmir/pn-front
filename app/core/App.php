<?php
class App
{
    private $controller = 'Home';
    private $method = 'index';
    private function splitURL()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", trim($URL, '/'));
       return $URL;
    }
    public function loadController()
    {
        $URL = $this->splitURL();
        /**select controller */
        $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        if (file_exists($filename) || is_dir($filename)) {
            require_once $filename;
            $this->controller =
                ucfirst($URL[0]);
                unset($URL[0]);
        } else {
            $filename = "../app/controllers/" . ucfirst($URL[0]) . "/" . ucfirst($URL[0]) . ".php";
            $filename1 = "../app/controllers/" . ucfirst($URL[0]) . "/" . ucfirst($URL[1]) . ".php";
            if (file_exists($filename) || is_dir($filename)) {
                require_once $filename;
                $this->controller=ucfirst($URL[0]);
            }
            if(file_exists($filename1) || is_dir($filename1)){
                require_once $filename1;
                $this->controller=ucfirst($URL[1]);
            }else {
                $filename = "../app/controllers/_404.php";
                require_once $filename;
                $this->controller = "_404";
            }
        }
     // print_r($URL);
        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], $URL);
    }
}

