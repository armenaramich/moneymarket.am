<?php

class Bootstrap {

    function __construct(){
        $ctrl =  $_GET;

        if(empty($ctrl)) {
            require "controller/HomeController.php";
            $home = new HomeController();
            $home->index();
            return FALSE;
        }

        if(count($ctrl) == 1 &&  isset($ctrl['controller'])) {
            $controller = ucfirst($ctrl['controller']).'Controller';   //for example Home + Controller
            $finalContr = new $controller;
            $finalContr->index();
        }
        if(count($ctrl) ==  2 && isset($ctrl["action"])) {
            $controller = ucfirst($ctrl['controller']).'Controller';  //for example Home + Controller
            $finalContr = new $controller;
            $action = 'action'.ucfirst($ctrl['action']);
            $finalContr->$action();
            return false;
        }
        if(count($ctrl) ==  3 && isset($ctrl["action"]) && isset($ctrl['param'])) {
            $controller = ucfirst($ctrl['controller']).'Controller';
            $finalContr = new $controller;
            $action = 'action'.ucfirst($ctrl['action']);
            $param = $ctrl['param'];
            $finalContr->$action($param);
            return false;
        }
    }

}