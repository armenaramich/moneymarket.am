<?php
class StudentController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel("student");
    }

    public function index()
    {
        $this->view->render('student/index');
    }

    public function actionList()
    {
        $allStudent = $this->student->showAllStudents();
        $this->view->render('student/list', ['studentList'=>$allStudent] );
    }

    public function actionAdd()
    {

        if(isset($_POST['addUser'])){
            $studentInfo = [];
            $studentInfo['f_name'] = $_POST['f_name'];
            $studentInfo['l_name'] = $_POST['l_name'];
            $studentInfo['email'] = $_POST['email'];
            $studentInfo['age'] = $_POST['age'];
            $studentInfo['gender'] = $_POST['gender'];
            $studentInfo['teacher'] = $_POST['teacher'];

            $studentUpdate = $this->student->addNewStudent($studentInfo);
        } else {
            $this->view->render('student/add');
        }

    }

    public function actionEdit($id)
    {
        if(isset($_POST['edit']))
        {
            $studentUpdateInfo = $_POST;
            $studentInfo = $this->student->updateStudentInfo($id, $studentUpdateInfo);
            Redirect::redirected(STUDENT_URL);
        } else {
            $studentInfo = $this->student->getStudentInfo($id);
            $this->view->render('student/edit', ['student' => $studentInfo]);
        }

    }
    public function actionDelete($id)
    {
        $studentInfo = $this->student->deleteStudentInfo($id);
        Redirect::redirected(STUDENT_URL);
    }
    public function actionView($id){
        $studentInfo = $this->student->getStudentInfo($id);
        $this->view->render('student/profile', ['student' =>$studentInfo]);
    }

}