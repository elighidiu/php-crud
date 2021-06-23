<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

//include all your model files here
require 'Model/dbConnection.php';
require 'Model/student.php';
require 'Model/studentLoader.php';
//require 'Model/teacher.php';
//require 'Model/teacherLoader.php';
//require 'Model/school.php';
//require 'Model/schoolLoader.php';


//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/schoolClassController.php';
require 'Controller/teacherController.php';
require 'Controller/studentController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}

if(isset($_GET['page']) && $_GET['page'] === 'students') {
    $controller = new StudentController();
}


$controller->render($_GET, $_POST);

