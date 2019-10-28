<?php

class Login_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function login() {
        $query = $this->db->prepare("SELECT * FROM users WHERE username= :username AND password= :password");
        $query->execute(array(
            ":username" => $_POST["username"],
            ":password" => md5($_POST["password"])
        ));
        //$date = $query->fetchAll();

        if($query->rowCount() != 0){
            Session::init();
            Session::set('isUser', true);
            header('location: ../dashboard/home');
            exit;

        }else{
            header('location: ../home');
            exit;
        }
    }

}

?>