<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    
    public function render(array $GET, array $POST)
    {
        
        // if($GET['page'] === 'students') {

        $studentList = new StudentLoader();
                       
        if(isset($POST['save'])){

            require 'View/student/addstudent.php'; 
        
        } elseif(isset($POST['delete'])){
            $id = $POST['delete'];
            $studentList->deleteStudent($id);
         
        } elseif(isset($POST['update'])){
            $id = intval($POST['update']);
            $selectedStudent = $studentList->getStudentById($id);
            require 'View/student/updatestudent.php'; 
          

        } else 
        
            if (isset($POST['save'])) {
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = $POST['classId'];
            
            $studentList->UpdateStudent($name, $email, $classId, $id);
            } elseif (isset($POST['name'], $_POST['email'], $POST['classId'])){
           
                $name = $POST['name'];
                $email = $POST['email'];
                $classId = $POST['classId'];
                $studentList->addStudent($name, $email, $classId);
                
                header('Location: ?page=students');
                exit;
            }
        
        if(isset($POST)){
            $students = $studentList->getStudents();
            require 'View/students.php'; 
        }
        

        // } else {
        //     require 'View/updatestudent.php'; 
        // }
      
    }   
}
