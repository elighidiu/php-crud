<?php

declare(strict_types=1);

class SchoolClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        if (isset($POST['save'])) {

            require 'View/schoolclass/addschoolclass.php';
        } elseif (isset($POST['update'])) {
            $id = intval($POST['update']);

            $schoolClassLoader = new SchoolClassLoader();
            $selectedSchoolClass = $schoolClassLoader->getSchoolClassById($id);

            require 'View/schoolclass/updateschoolclass.php';
        } else {

            if (isset($POST['submitupdate'])) {
                
                $id = intval($POST['id']);
                $name = $POST['name'];
                $location = $POST['location'];
                $teacherId = $POST['teacherId'];

                $schoolClassLoader = new SchoolClassLoader();
                $schoolClassLoader->UpdateSchoolClass($name, $location, $teacherId, $id);
            } elseif (isset($POST['name'], $_POST['location'], $POST['teacherId'])) {

                $name = $POST['name'];
                $location = $POST['location'];
                $teacherId = $POST['teacherId'];

                $schoolClassLoader = new SchoolClassLoader();
                $schoolClassLoader->addSchoolClass($name, $location, $teacherId);
            } elseif (isset($POST['delete'])) {
                $id = $POST['delete'];

                $schoolClassLoader = new SchoolClassLoader();
                $schoolClassLoader->deleteSchoolClass($id);
            }

            $schoolClassLoader = new SchoolClassLoader();
            $schoolClasses = $schoolClassLoader->getSchoolClasses();

            require 'View/schoolClasses.php';
        }
    }
}
