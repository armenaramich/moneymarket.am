<?php

class DashboardController extends Controller{
    public function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get("isUser");
        if(!$logged){
            Session::destroy();
            header('location: ../login/home');
            exit;
        }
    }

    public function index() {
        $this->view->msg = "Welcome in Dashboard page";
        $this->view->render('dashboard/dashboard');
    }
}