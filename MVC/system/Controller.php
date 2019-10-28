<?php

class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function loadModel($name)
    {
        $path = "model/" . $name . "model.php";
        if (file_exists($path)) {
            require $path;
            $modelName = ucfirst($name) . "model";
            $this->$name = new $modelName;
        }
    }
}
