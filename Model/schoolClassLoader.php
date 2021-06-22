<?php
    class SchoolClassLoader {
        private array $schoolClass=[];

        public function __construct() {
            $connection = new Dbconnection();
            $pdo = $connection->connect();
    
            $handle = $pdo->prepare('SELECT * FROM class');
            $handle->execute();
            $allClasses = $handle->fetchAll();
    
            foreach ($allClasses as $schoolclass) {
                array_push($this->schoolClass, new SchoolClass((int)$schoolclass['id'], $schoolclass['name'], $schoolclass['location'], (int)$schoolclass['teacherId']));
            }
    
        }

        /**
         * Get the value of schoolClass
         */ 
        public function getSchoolClass():array
        {
                return $this->schoolClass;
        }

        public function getSchoolClassById(int $id){
            foreach($this->schoolClass as $classId) {
                if($id == $classId->getId()){
                    return $classId;
                }
            }
        }

        public function getSchoolClassByName(string $name){
            foreach($this->schoolClass as $className) {
                if($name == $className->getName()){
                    return $className;
                }
            }
        }
    }
?>