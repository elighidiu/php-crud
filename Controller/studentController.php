<?php
declare(strict_types = 1);

class studentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    
    public function render(array $GET, array $POST)
    {
        $studentList = new StudentLoader();
        $students = $studentList->getStudents();
        
        require 'View/students.php';
    }
}

?>