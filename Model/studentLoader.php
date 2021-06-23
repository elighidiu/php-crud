<?php
    class StudentLoader {

        private array $students=[];
    
         public function __construct(){
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle = $pdo->prepare('SELECT * FROM student');
            $handle->execute();
            $allStudents = $handle->fetchAll();
            
            echo "this code is running";
            var_dump($allStudents);

            foreach($allStudents as $student) {
                array_push($this->students, new Student((int)$student['id'], $student['name'], $student['email'], (int)$student['classId'], (int)$student['teacherId']));
            }
        }

        /**
         * Get the value of students
         */ 
        public function getStudents(): array
        {
            echo "this code is running";
                var_dump($this->students);
                return $this->students;
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