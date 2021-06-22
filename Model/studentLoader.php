<?php
    class StudentLoader {

        private array $students=[];
    
         public function __construct(){
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle = $pdo->prepare('SELECT * FROM student');
            $handle->execute();
            $allStudents = $handle->fetchAll();

            foreach($allStudents as $student) {
                array_push($this->students, new Student((int)$student['id'], $student['name'], $student['email'], (int)$student['classId'], (int)$student['teacherId']));
            }
        }

        /**
         * Get the value of studentLoader
         */ 
        public function getStudents()
        {
                return $this->studentLoader;
        }

        public function getStudentById(int $id)
        {
            foreach($this->students as $student){
                if($id == $student->getId()){
                    return $student;
                }
            }
        }
        // public function getStudentByName(string $name)
        // {
        //     foreach($this->students as $student){
        //         if($name == $student->getname()){
        //             return $student;
        //         }
        //     }
        // }
        
    }
?>