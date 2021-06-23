<?php
declare(strict_types = 1);

class SchoolClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        
    $schoolClassLoader = new SchoolClassLoader();
    $schoolClasses = $schoolClassLoader->getSchoolClasses();
    
    if(isset($_POST['name'], $_POST['location'], $_POST['teacherId'])){
           
        $name = $_POST['name'];
        $location = $_POST['location'];
        $teacherId = $_POST['teacherId'];
        $schoolClassLoader->addSchoolClass($name, $location, $teacherId  );
        
    }

    require 'View/schoolClasses.php'; 
    }
}

?>