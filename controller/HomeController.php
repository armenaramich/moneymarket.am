<?php

class HomeController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->msg = "Welcome to My MVC project";
        $this->view->render('home/index');
    }
//
//    public function test() {
//        $this->view->msg = "We are in Test";
//        $this->view->render('home/test');
//    }
}
