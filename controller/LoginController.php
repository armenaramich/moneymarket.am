<?php

class LoginController extends Controller{
    public function __construct() {
        parent::__construct();   
    }
    
    public function index() {
        $this->view->msg = "Welcome in login page";
        $this->view->render('login/login',[],1);
    }

    public function actionDoLogin() {
        echo '<PRE>';
        print_r($_POST); die();
//        $this->loadModel("login");
//        $this->model->login();
//        $this->view->render('login/login');
    }

    public function doLogout() {
        Session::init();
        Session::destroy();
        $this->view->render('login/login');
    }


    
}