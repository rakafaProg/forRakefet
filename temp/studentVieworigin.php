<?php

class StudentView{
 
    public function output(){
    $businessLogic = new BL();
    $studentsObjectsArray =  $businessLogic->getstudentID();

    echo "<div class = 'container'>";
 
    echo "<h2>Details of students: "."</h2>";

    foreach ($studentsObjectsArray as $studentObject => $displayStudent) { //loop $displayAdress gets the content of the addresses array
        echo '<div>' . " " . $displayStudent->getName() . 
        " " . $displayStudent->getPhone() . " " . $displayStudent->getEmail() . " " . $displayStudent->getImage() . '</div>';
        echo '<img src="' . $displayStudent->getImage() . '" >';
    }

    

    echo "</div>";
    }

}

?>






