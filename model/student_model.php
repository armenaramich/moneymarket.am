<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21-Oct-19
 * Time: 6:40 PM
 */

class student_model extends Model
{
  public function __construct()
  {
      parent::__construct();
  }

  function showAllStudents(){
      $query = $this->db->query("SELECT * FROM student");
      $data = $query->fetchAll();


      echo "<PRE>";
      print_r($data);
  }


}