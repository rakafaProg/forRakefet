<?php
    class AdminModel {
        private $adminId;
        private $name;
        private $role;
        private $phone;
        private $email;
        private $password;
        private $image;
        
        
        function __construct($adminParamsArray= ["adminId"=>"", "name"=>"", "role"=>"", "phone"=>"", "email"=>"", "password"=>"", "image"=>""]) {
            $this->adminId = $adminParamsArray['id'];
            $this->name = $adminParamsArray['name'];
            $this->role = $adminParamsArray['role'];
            $this->phone = $adminParamsArray['phone'];
            $this->email = $adminParamsArray['email'];
            $this->password = $adminParamsArray['password'];
            $this->image = $adminParamsArray['image'];
           
        }

        //this methods allows to echo and get structured output- otherwise gets object object
        public function __toString() {
            $output = "Admin Name: ".($this->name)."<br>Id: ".($this->studentId)."<br>Admin role: ".( $this->role)."<br>Phone number: ".($this->phone)."<br>"."E mail: <a href='mailto:".($this->email)."'>".($this->email)."</a><br>";
        
            return $output;
        }

        function getAdminID() {
            return $this->adminId;
        }

        function getName() {
            return $this->name;
        }

        function getRole() {
            return $this->role;
        }

        function getPhone() {
            return $this->phone;
        }
        function getEmail() {
            return $this->email;
        }
        function getImage() {
            return ('resources/pictures/admin/'.$this->image);
        }

        function setAdmin($adminDetails) {
            $businessLogic = new BL();
            $businessLogic->insertAdmin($adminDetails);
        }
    }
    
?>

