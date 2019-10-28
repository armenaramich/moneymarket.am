<?php

class View {

    function __construct() {
        
    }

    public function render($name) {

//        if(isset($noInclude) && $noInclude == TRUE){
//            require 'view/' . $name . '.php';
//        }else{
            require 'view/layout/header.php';
            require 'view/' . $name . '.php';
            require 'view/layout/footer.php';
//        }
    }

}
