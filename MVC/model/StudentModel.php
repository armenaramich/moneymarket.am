<?php
class StudentModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function showAllStudents()
    {
        $query = $this->db->query("SELECT * FROM 	student_table");
        $data = $query->fetchAll();
        return $data;
    }

    public function getStudentInfo($id)
    {
        $studentQuery = $this->db->prepare("SELECT * FROM `student_table` WHERE id = :id");
        $studentQuery->execute([':id' => $id]);
        return $studentQuery->fetch();
    }

    public function updateStudentInfo($id, $studentUpdateInfo)
    {
        $upInfo = $studentUpdateInfo;
        $name = $upInfo['f_name'];
        $studentQuery = $this->db->prepare("UPDATE student_table SET f_name='$name'  WHERE id=$id");
        $studentQuery->execute();
    }

    public function deleteStudentInfo($id)
    {
        $studentQuery = $this->db->prepare("DELETE FROM student_table  WHERE id=$id");
        $studentQuery->execute();
    }

    public function addNewStudent($array)
    {
        $sql = "INSERT INTO `student_table`(f_name, l_name, age, email, gender, teacher_id) VALUES (:f_name, :l_name, :age, :email, :gender, :teacher_id)";
        $studentQuery = $this->db->prepare($sql);
        $studentQuery->execute([
            ':f_name' => $array['f_name'],
            ':l_name' => $array['l_name'],
            ':age' => $array['age'],
            ':email' => $array['email'],
            ':gender' => $array['gender'],
            ':teacher_id' => $array['teacher']
        ]);
        Redirect::redirected(STUDENT_URL);
    }
}