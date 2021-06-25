<?php
declare(strict_types = 1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $schoolClassLoader = new SchoolClassLoader();
        $schoolClasses = $schoolClassLoader->getSchoolClasses();
        
                               
        if(isset($POST['save'])){

            require 'View/teacher/addteacher.php'; 
         
        } elseif(isset($POST['update'])){

            $id = intval($POST['update']);

            $teacherLoader = new TeacherLoader();
            $selectedTeacher = $teacherLoader->getTeacherById($id);

            require 'View/teacher/updateteacher.php'; 
          

        } else {
        
            if (isset($POST['submitupdate'])) {
            
            $id = intval($POST['id']);
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = $POST['classId'];
            
            $teacherLoader = new TeacherLoader();
            $teacherLoader->UpdateTeacher($name, $email, $classId, $id);
           
        } elseif (isset($POST['name'], $_POST['email'], $POST['classId'])){
           
                $name = $POST['name'];
                $email = $POST['email'];
                $classId = $POST['classId'];

                $teacherLoader = new TeacherLoader();
                $teacherLoader->addTeacher($name, $email, $classId);
                
                
            } elseif(isset($POST['delete'])){
                $id = $POST['delete'];

                $teacherLoader = new TeacherLoader();
                $teacherLoader->deleteTeacher($id);

                
            }

            $teacherLoader = new TeacherLoader();
            $teachers = $teacherLoader->getTeachers();
            require 'View/teachers.php'; 
        }
    }
}
