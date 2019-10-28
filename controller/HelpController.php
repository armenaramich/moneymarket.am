<?php

class HelpController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->msg = "we are in Help";
        $this->view->render('help/help');
    }

    public function other($arg = 'False') {

        require 'model/help_model.php';
        $model = new Help_Model();
    }

}
