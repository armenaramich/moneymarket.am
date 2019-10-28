<?php
Class Request{
    public function isPost(){//ispost
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            return true;
        }
        else{
            return false;
        }
    }
    public function getPost($name){
       return (isset($_POST[$name])) ? $_POST[$name] :   NULL;
    }
}

