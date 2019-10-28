<?php

class Controller {

    function __construct() {
        $this->view = new View();
    }
    
    function loadModel($name){
        $pathe = "model/".$name."_model.php";
        if(file_exists($pathe)){
            require "model/" . $name . "_model.php";
            $modelName = $name . "_model";
            $this->$name = new $modelName ;
        }
    }

}
