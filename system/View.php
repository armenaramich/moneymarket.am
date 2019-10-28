<?php

class View {

    function __construct() {
        
    }

    public function render($name, $showdata=[],$noInclude=false) {
        extract($showdata, EXTR_OVERWRITE); //    ['username'=>$username,'asdasd'=>$asdsa]
        if(isset($noInclude) && $noInclude){
            require 'view/' . $name . '.php';
        }else{
            require 'view/layout/header.php';
            require 'view/' . $name . '.php';
            require 'view/layout/footer.php';
        }
    }

}
