<?php
    class SchoolClassLoader {
        private array $schoolClasses=[];

        public function __construct() {
            $connection = new Dbconnection();
            $pdo = $connection->connect();
    
            $handle = $pdo->prepare('SELECT * FROM class');
            $handle->execute();
            $allClasses = $handle->fetchAll();
    
            foreach ($allClasses as $schoolclass) {
                array_push($this->schoolClasses, new SchoolClass((int)$schoolclass['id'], $schoolclass['name'], $schoolclass['location'], (int)$schoolclass['teacherId']));
            }
    
        }

        /**
         * Get the value of schoolClass
         */ 
        public function getSchoolClasses():array
        {
                return $this->schoolClasses;
        }

        public function getSchoolClassById(int $id){
            foreach($this->schoolClasses as $class) {
                if($id == $class->getId()){
                    return $class;
                }
            }
        }

        public function addSchoolClass($name, $location, $teacherId){
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle=$pdo->prepare('INSERT INTO class
            (name, location, teacherId)
            VALUES(:name, :location, :teacherId);');
            
            $handle->bindValue(':name' , $name);
            $handle->bindValue(':location' , $location);
            $handle->bindValue(':teacherId' , $teacherId);
            $handle->execute();
        }
    }
?>