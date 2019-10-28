<?php
class TeacherModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function showAllTeachers()
    {
        $query = $this->db->query("SELECT * FROM 	teacher_table");
        $data = $query->fetchAll();
        return $data;
    }
    public function getTeacherInfo($id){
        $teacherQuery = $this->db->prepare("SELECT * FROM teacher_table WHERE id = :id");
        $teacherQuery->execute([':id' =>$id]);
        return $teacherQuery->fetch();
    }
    public function updateTeacherInfo ($id, $updateInfo)
    {
        $upInfo = $updateInfo;
        $name = $upInfo['f_name'];
        $studentQuery = $this->db->prepare("UPDATE teacher_table SET f_name='$name'  WHERE id=$id");
        $studentQuery->execute();
    }
}