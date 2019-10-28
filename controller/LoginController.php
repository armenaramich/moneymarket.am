<?php

class LoginController extends Controller{
    public function __construct() {
        parent::__construct();   
    }
    
    public function index() {
        $this->view->msg = "Welcome in login page";
        $this->view->render('login/login');
    }

    public function login() {
        $this->loadModel("login");
        $this->model->login();
        $this->view->render('login/login');
    }

    public function logout() {
        Session::init();
        Session::destroy();
        $this->view->render('login/login');
    }
    
}