<?php
    class CoursesModel {
        private $courseId;
        private $name;
        private $decript;
        private $image;
        
        function __construct($courseParamsArray) {
            $this->courseId = $courseParamsArray['courseId'];
            $this->name = $courseParamsArray['name'];
            $this->decript = $courseParamsArray['description'];
            $this->image = $courseParamsArray['image'];
           
        }

        //this methods allows to echo and get structured output- otherwise gets object object
        public function __toString() {
            $output = "Course Name: ".($this->name)."<br><br>Course Id: ".($this->courseId)."<br><br>Course description: ".($this->decript)."<br>";
            return $output;
        }


        function getcourseID() {
            return $this->courseId;
        }

        function getName() {
            return $this->name;
        }

        function getDescript() {
            return $this->decript;
        }
        
        function getImage() {
            return $this->image;
        }
    }
    
?>

