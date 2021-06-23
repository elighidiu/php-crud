<?php
declare(strict_types = 1);

class teacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        if(isset($_POST['name'], $_POST['email'], $_POST['classId'])){
           
            $name = $_POST['name'];
            $email = $_POST['email'];
            $classId = $_POST['classId'];
            $teacherLoader->addTeacher($name, $email, $classId  );
            
        }

        require 'View/teachers.php'; 
    }
}

?>