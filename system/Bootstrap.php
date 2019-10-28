<?php

class Bootstrap {

    function __construct()
    {
//        echo '<PRE>'; print_r($_GET);
        $url = isset($_GET) ? $_GET : [];
        //print_r($url);die();

        if (empty($url)){
            require 'controller/LoginController.php';
            $home= new LoginController();
            $home->index();
            return false;
        }
        if (count($url)==1 && isset($url['controller'])){
            $contr = ucfirst($url['controller']).'Controller';
            $controller = new $contr;

            $controller->index();
            return false;

        }
        if (count($url)==2 && isset($url['action'])){
            $contr1 =ucfirst($url['controller']).'Controller';
            $cont = new $contr1;
            $action = 'action'.ucfirst($url['action']);
            $cont->$action();
            return false;

        }
    }

//    function __construct() {
//        $url = isset($_GET["url"]) ? $_GET["url"] : NULL;
//        $url = rtrim($url, '/');
//        $url = explode('/', $url);
//
//        if (empty($url[0]) || $url[0] == 'home.php') {
//            require 'controller/HomeController.php';
//            $controller = new IndexController();
//            $controller->home();
//            return FALSE;
//        }
//
//        $file = 'controller/' . $url[0] . 'Controller.php';
//        if (file_exists($file)) {
//            require $file;
//        } else {
//            require 'controller/ErrorController.php';
//            $error = new ErrorController();
//            $error->home();
//            return FALSE;
//        }
//
//        $controllerFullName = $url[0]."Controller";
//        $controller = new $controllerFullName;
//
//        if (isset($url[2])) {
//            if (method_exists($controller, $url[1])) {
//                $controller->{$url[1]}($url[2]);
//            } else {
//                require 'controller/ErrorController.php';
//                $error = new ErrorController();
//                $error->home();
//                return FALSE;
//            }
//        } else {
//            if (isset($url[1])) {
//                if (method_exists($controller, $url[1])) {
//                    $controller->{$url[1]}();
//                } else {
//                    require 'controller/ErrorController.php';
//                    $error = new ErrorController();
//                    $error->home();
//                    return FALSE;
//                }
//            } else {
//                $controller->home();
//            }
//        }
//    }

}
