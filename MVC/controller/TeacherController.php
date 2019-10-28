<?php
class TeacherController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->loadModel("teacher");
    }

    public function index()
    {
        $allTeachers = $this->teacher->showAllTeachers();
    }

    public function actionList()
    {
        $allTeacher = $this->teacher->showAllTeachers();
        $this->view->render('teacher/list', ['teacherList'=>$allTeacher]);
    }

    public function actionAdd()
    {
        $this->view->render('teacher/add');
    }

    public function actionEdit($id)
    {
        if (isset($_POST['edit'])) {
            $updateInfo = $_POST;
            $teacherInfo = $this->teacher->updateTeacherInfo($id, $updateInfo);
            $this->actionList();
        } else {
            $teacherInfo = $this->teacher->getTeacherInfo($id);
            $this->view->render('teacher/edit', ['teacher' => $teacherInfo]);
        }
    }
}
