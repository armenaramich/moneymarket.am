<?php

class View {
    function __construct() {

    }

    public function render($name, $showData = []){
            extract($showData, EXTR_OVERWRITE);
            require "view/layout/header.php";
            require "view/".$name.".php";
            require "view/layout/footer.php";
    }
}