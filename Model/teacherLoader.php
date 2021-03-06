<?php 
    class TeacherLoader {
        private array $teachers = [];

        public function __construct() {
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle = $pdo->prepare('SELECT * FROM teacher');
            $handle->execute();
            $allTeachers = $handle->fetchAll();

            foreach($allTeachers as $teacher) {
                array_push($this->teachers, new Teacher((int)$teacher['id'], $teacher['name'], $teacher['email'], (int)$teacher['classId']));
            }
        }

        /**
         * Get the value of teachers
         */ 
        public function getTeachers(): array
        {
                return $this->teachers;
        }

        public function getTeacherById(int $id){
            foreach($this->teachers as $teacher){
                if($id== $teacher->getId()){
                    return $teacher;
                }
            }
        }

        public function addTeacher($name, $email, $classId){
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle=$pdo->prepare('INSERT INTO teacher
            (classId, name, email)
            VALUES(:classId, :name, :email);');
            $handle->bindValue(':classId' , $classId);
            $handle->bindValue(':name' , $name);
            $handle->bindValue(':email' , $email);
            $handle->execute();
        }

        public function UpdateTeacher($name, $email, $classId, $id){
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle=$pdo->prepare('UPDATE teacher
            SET classId=:classId, name=:name, email=:email
            WHERE id=:id;
            ');
            $handle->bindValue(':classId' , $classId);
            $handle->bindValue(':name' , $name);
            $handle->bindValue(':email' , $email);
            $handle->bindValue(':id' , $id);
            $handle->execute();
        }
        
        public function deleteTeacher($id){
            $connection = new Dbconnection();
            $pdo = $connection->connect();

            $handle=$pdo->prepare('DELETE FROM teacher
            WHERE id=:id;
            ');
            $handle->bindValue(':id' , $id);
            $handle->execute();
        }
    }
?>