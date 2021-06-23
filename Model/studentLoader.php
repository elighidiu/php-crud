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
                array_push($this->students, new Student((int)$student['id'], $student['name'], $student['email'], (int)$student['classId']));
            }
        }

        /**
         * Get the value of students
         */ 
        public function getStudents(): array
        {
           
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
        
        public function addStudent($name, $email, $classId){
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle=$pdo->prepare('INSERT INTO student
            (classId, name, email)
            VALUES(:classId, :name, :email);');
            $handle->bindValue(':classId' , $classId);
            $handle->bindValue(':name' , $name);
            $handle->bindValue(':email' , $email);
            $handle->execute();
        }
        

       
    }
?>