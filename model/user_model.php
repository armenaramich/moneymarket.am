<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28-Oct-19
 * Time: 7:56 PM
 */

class user_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkLogin($username,$password){
        $sql = 'SELECT * FROM users WHERE username=:username AND password=:password';
        $query=$this->db->prepare($sql);
        $query->execute(array(
            ":username" => $username,
            ":password" => $password
        ));
        return $query->fetch();

    }
}