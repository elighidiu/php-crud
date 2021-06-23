<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    
    public function render(array $GET, array $POST)
    {
        $studentList = new StudentLoader();
        $students = $studentList->getStudents();
        
        if(isset($_POST['name'], $_POST['email'], $_POST['classId'])){
           
            $name = $_POST['name'];
            $email = $_POST['email'];
            $classId = $_POST['classId'];
            $studentList->addStudent($name, $email, $classId  );
            
        }
        

        require 'View/students.php';

        
    }

   
}

?>