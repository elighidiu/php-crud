<?php
declare(strict_types = 1);

class schoolClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        
    $schoolClassLoader = new SchoolClassLoader();
    $schoolClasses = $schoolClassLoader->getSchoolClasses();

    require 'View/schoolClasses.php'; //TO BE CREATED
    }
}

?>