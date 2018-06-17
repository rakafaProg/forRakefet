<?php
    class StudentModel {
        private $studentId;
        private $name;
        private $phone;
        private $email;
        private $image;
        
        function __construct($studentId, $name, $phone, $email, $image) {
            $this->studentId = $studentId;
            $this->name = $name;
            $this->phone =  $phone;
            $this->email = $email;
            $this->image = $image;
           
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

