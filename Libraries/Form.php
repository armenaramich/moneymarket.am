<?php

class Form {

    public function Open(Array $atributes = []){
        $attrs = '';
        foreach ($atributes as $key=>$value){
            $attrs .= $key . "=" . "$value" . ' ';
        }
        return "<form $attrs>";
    }

    public function Close(){
        return "</form>";
    }

    public function Input(Array $atributes){
        $attrs = '';
        foreach ($atributes as $key=>$value){
            $attrs .= $key . "=" . "$value " . ' ';
        }
        return "<input $attrs>";
    }

}