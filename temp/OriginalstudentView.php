<?php
    class StudentView{

     public function output(){
                
                    $businessLogic = new BL();
                    $studentsObjectsArray =  $businessLogic->getstudentID();
        
    
        echo "<div class=\"container-fluid text-center\">    
        <div class=\"row content\">
        <div class=\"col-sm-2 sidenav\" id=\"student\">";
             
        echo '<h3>students 
                <span> 
                    <a href=# type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </span>
            </h3>';

        foreach ($studentsObjectsArray as $studentObject => $displayStudent) { 
           
            // echo '<a href=# ><img value= '. $displayStudent->getstudentsID() .' class="studentId"  width=50 src="' . $displayStudent->getImage() . '" ></a>';
            // var_export($displayStudent, true)
            
            echo '<a href=# ><img value= "'. var_export($displayStudent, true) .'" class="studentId"  width=50 src="' . $displayStudent->getImage() . '" ></a>';
            echo '<div>' . " " . $displayStudent->getName() . '</div>';
            echo '<div>' . " " . $displayStudent->getPhone() . '</div>';
        
        };
        echo "</div>";
        
        // . $displayStudent->getcourseID()
    
}
}
?>

           

           
            