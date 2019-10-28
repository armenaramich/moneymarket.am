<?php

//require 'lib/Bootstrap.php';
//require 'lib/Controller.php';
//require 'lib/Model.php';
//require 'lib/View.php';
require 'system/Session.php';
require 'config/database.config.php';
require 'config/paths.config.php';

function my_autoloader($class) {
    require 'system/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

require 'controller/StudentController.php';
require 'controller/TeacherController.php';
//$app = new Boostrap();
//
//$myModel= new Model();
//
//echo '<PRE>';
//print_r($myModel);


//$ctrl= new Controller();
////echo '<PRE>';
//
////print_r($ctrl);
//
//$ctrl->view->render('studentModel/home');
$boots= new Bootstrap();