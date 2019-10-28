<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21-Oct-19
 * Time: 6:35 PM
 */

class TeacherController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->view->render('teacher/index');
    }
}