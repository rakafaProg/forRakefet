<?php
    class StudentModel {
        private $studentId;
        private $name;
        private $phone;
        private $email;
        private $image;
        
        function __construct($studentsParamsArray= ["studentId"=>"", "name"=>"", "phone"=>"", "email"=>"", "image"=>""]) {
            $this->studentId = $studentsParamsArray['studentId'];
            $this->name = $studentsParamsArray['name'];
            $this->phone = $studentsParamsArray['phone'];
            $this->email = $studentsParamsArray['email'];
            $this->image = $studentsParamsArray['image'];
           
        }
        //this methods allows to echo and get structured output- otherwise gets object object
        public function __toString() {
            $output = "Student Name: ".($this->name)."<br>Id: ".($this->studentId)."<br>Phone number: ".($this->phone)."<br>"."E mail: <a href='mailto:".($this->email)."'>".($this->email)."</a><br>";
        
            return $output;
        }

        function getstudentsID() {
            return $this->studentId;
        }

        function getName() {
            return $this->name;
        }

        function getPhone() {
            return $this->phone;
        }
        function getEmail() {
            return $this->email;
        }
        function getImage() {
            return $this->image;
        }

        function setImage($image) {
            $this->image = $image;
        }
    }
    
?>

