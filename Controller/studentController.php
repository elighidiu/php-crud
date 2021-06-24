<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    
    public function render(array $GET, array $POST)
    {
        var_dump($GET);
        var_dump($POST);
        if($GET['page'] === 'students') {

        $studentList = new StudentLoader();
        $students = $studentList->getStudents();
        
        if(isset($POST['name'], $_POST['email'], $POST['classId'])){
           
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = $POST['classId'];
            $studentList->addStudent($name, $email, $classId);
            
            header('Location: ?page=students');
            exit;

        } elseif(isset($POST['delete'])){
            $id = $POST['delete'];
            $studentList->deleteStudent($id);
         
        } elseif(isset($POST['update'])){
            $id = $POST['update'];
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = $POST['classId'];
            
            $studentList->UpdateStudent($name, $email, $classId, $id);

        }
        require 'View/students.php';  

        } else {
            require 'View/updatestudent.php'; 
        }
      
    }   
}

?>