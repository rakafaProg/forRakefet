<?php
    // require_once 'connection.php';
    
    require_once (realpath(dirname(__FILE__) . '/../DB/connection.php'));

    class BL {
        function getstudentID() {
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
            $query = 'INSERT INTO `student`(`id`, `name`, `phone`, `email`, `image`) 
              VALUES 
              ("'.$student['id'].'","'.$student['name'].'","'.$student['phone'].
              '","'.$student['email'].'","'.$student['image'].'")';

            $studentTable = $adapter->fetch($query);
        }

        

        function getcourseID() {
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
            $query = 'INSERT INTO `course`(`id`, `name`, `description`, `image`) 
              VALUES 
              ("'.$course['id'].'","'.$course['name'].'","'.$course['description'].
              '","'.$course['image'].'")';

            $courseTable = $adapter->fetch($query);
        }
    }

?>