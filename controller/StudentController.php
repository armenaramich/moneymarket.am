<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21-Oct-19
 * Time: 6:26 PM
 */

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->view->render('studentModel/index');
    }
    public function actionList(){
        $this->loadModel('student');
        $this->student->showAllStudents();
    }

    public function actionAdd(){
        if (isset($_POST) && !empty($_POST)){
            $this->loadModel('student');
            $insertArray = [];
            $this->student-insertStudent($insertArray);
        }
        $this->view->render('student/add');
    }
}