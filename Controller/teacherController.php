<?php
declare(strict_types = 1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
     
        $teacherLoader = new TeacherLoader();
                       
        if(isset($POST['save'])){

            require 'View/teacher/addteacher.php'; 
        
        } elseif(isset($POST['delete'])){
            $id = $POST['delete'];
            $teacherLoader->deleteTeacher($id);
         
        } elseif(isset($POST['update'])){
            $id = intval($POST['update']);
            $selectedTeacher = $teacherLoader->getTeacherById($id);
            require 'View/teacher/updateteacher.php'; 
          

        } else 
        
            if (isset($POST['save'])) {
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = $POST['classId'];
            
            $teacherLoader->UpdateTeacher($name, $email, $classId, $id);
            } elseif (isset($POST['name'], $_POST['email'], $POST['classId'])){
           
                $name = $POST['name'];
                $email = $POST['email'];
                $classId = $POST['classId'];
                $teacherLoader->addTeacher($name, $email, $classId);
                
                header('Location: ?page=teachers');
                exit;
            }
        
        if(isset($POST)){
            $teachers = $teacherLoader->getTeachers();
            require 'View/teachers.php'; 
        }




    }


}

?>