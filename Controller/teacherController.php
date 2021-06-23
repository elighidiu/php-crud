<?php
declare(strict_types = 1);

class teacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        require 'View/teachers.php'; 
    }
}

?>