<?php

declare(strict_types=1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.

    public function render(array $GET, array $POST)
    {

        // if($GET['page'] === 'students') {

            $schoolClassLoader = new SchoolClassLoader();
            $schoolClasses = $schoolClassLoader->getSchoolClasses();
    
        if (isset($POST['save'])) {

            require 'View/student/addstudent.php';
            
        } elseif (isset($POST['update'])) {
            $id = intval($POST['update']);

            $studentList = new StudentLoader();
            $selectedStudent = $studentList->getStudentById($id);

            require 'View/student/updatestudent.php';
        } else {

            if (isset($POST['submitupdate'])) {

                $id = intval($POST['id']);
                $name = $POST['name'];
                $email = $POST['email'];
                $classId = $POST['classId'];

                $studentList = new StudentLoader();
                $studentList->UpdateStudent($name, $email, $classId, $id);

            } elseif (isset($POST['name'], $_POST['email'], $POST['classId'])) {

                $name = $POST['name'];
                $email = $POST['email'];
                $classId = $POST['classId'];

                $studentList = new StudentLoader();
                $studentList->addStudent($name, $email, $classId);

            } elseif (isset($POST['delete'])) {
                    $id = $POST['delete'];

                    $studentList = new StudentLoader();
                    $studentList->deleteStudent($id);
            }

            
            $studentList = new StudentLoader();
            $students = $studentList->getStudents();

            require 'View/students.php';
        }

    }
}
