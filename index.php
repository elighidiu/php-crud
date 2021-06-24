<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

//include all your model files here
require 'Model/Dbconnection.php';
require 'Model/Student.php';
require 'Model/StudentLoader.php';
require 'Model/Teacher.php';
require 'Model/TeacherLoader.php';
require 'Model/SchoolClass.php';
require 'Model/SchoolClassLoader.php';


//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/SchoolClassController.php';
require 'Controller/TeacherController.php';
require 'Controller/StudentController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}

if(isset($_GET['page']) && $_GET['page'] === 'students' || $_GET['page'] === 'updatestudent') {
    $controller = new StudentController();
}

if(isset($_GET['page']) && $_GET['page'] === 'teachers') {
    $controller = new TeacherController();
}

if(isset($_GET['page']) && $_GET['page'] === 'schoolClasses') {
    $controller = new SchoolClassController();
}


$controller->render($_GET, $_POST);

