<?php
        
    require_once (realpath(dirname(__FILE__) . '/../DB/connection.php'));

    class BL {
        function getStudent() {
            $adapter = new DatabaseConnection();
            $query = 'SELECT * FROM `student`';
            $studentTable = $adapter->fetch($query);
            // SQL DataTable to Array of Objects
            $studentObjectsArray = array();
            foreach($studentTable as $studentRow) {
                array_push($studentObjectsArray, new StudentModel($studentRow));
            }
            
            return $studentObjectsArray;

        }

        
        function insertStudent($student) {
            $adapter = new DatabaseConnection();
            $query = 'INSERT INTO `student`(`studentId`, `name`, `phone`, `email`, `image`) 
              VALUES 
              ("'.$student['studentId'].'","'.$student['name'].'","'.$student['phone'].
              '","'.$student['email'].'","'.$student['image'].'")';

            $studentTable = $adapter->fetch($query);
        }
        
        

        function getCourse() {
            $adapter = new DatabaseConnection();
            $query = 'SELECT * FROM `course`';
            $courseTable = $adapter->fetch($query);
            // SQL DataTable to Array of Objects
            $courseObjectsArray = array();
            foreach($courseTable as $courseRow) {
                array_push($courseObjectsArray, new CoursesModel($courseRow));
            }
            
            return $courseObjectsArray;
        }

        
        function insertCourse($course) {
            $adapter = new DatabaseConnection();
            $query = 'INSERT INTO `course`(`courseId`, `name`, `description`, `image`) 
              VALUES 
              ("'.$course['courseId'].'","'.$course['name'].'","'.$course['description'].
              '","'.$course['image'].'")';

            $courseTable = $adapter->fetch($query);
        }

        function getAdmin() {
            $adapter = new DatabaseConnection();
            $query = 'SELECT * FROM `administrator`';
            $adminTable = $adapter->fetch($query);
            // SQL DataTable to Array of Objects
            $adminObjectsArray = array();
            foreach($adminTable as $adminRow) {
                array_push($adminObjectsArray, new AdminModel($adminRow));
            }
            
            return $adminObjectsArray;

        }

        
        function insertAdmin($admin) {
            $adapter = new DatabaseConnection();
            $query = 'INSERT INTO `administrator`(`id`, `name`, `role`, `phone`, `email`, `password`, `image`) 
              VALUES 
              ("'.$admin['id'].'","'.$admin['name'].'","'.$admin['role'].
              '","'.$admin['phone'].'","'.$admin['email'].'","'.$admin['password'].
              '","'.$admin['image'].'")';

            $adminTable = $adapter->fetch($query);
        }
    }

?>