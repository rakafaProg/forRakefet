<?php
    class StudentView{

     public function output(){
                
                    $businessLogic = new BL();
                    $studentsObjectsArray =  $businessLogic->getStudent();
        
    
        echo "<div class=\"container-fluid text-center\">    
        <div class=\"row content\">
        <div class=\"col-sm-2 sidenav\" id=\"student\">";
             
        echo '<h3>students 
        
                <span> 
                    <form action="" method="POST">
                        <span> 
                        <p type="button" class="btn btn-default btn-sm">
                        <button type=submit" class="glyphicon glyphicon-plus" name="addStudentBtn"></button>
                        </p>
                        </span>
                            
                    </form>
                
                </span>
            </h3>';
        

        foreach ($studentsObjectsArray as $studentObject => $displayStudent) { 
           
            //here value of image when clicked which is passed on is the whole "array" $displayStudent
            // echo '<a href=# ><img value= "'. var_export($displayStudent, true) .'" class="studentId"  width=50 src="' . $displayStudent->getImage() . '" ></a>';
           
           //here value of image when clicked which is passed on is only the ID value in $displayStudent
        //    trying to use post method created post method in test.php in temp folder that works...
        
        
        echo '
        
        <form action="" method="POST">
        <input type="image" class="studentId" name="picture" value="'. $displayStudent->getstudentsID() .'" alt="studentImage" width=50 src="' . $displayStudent->getImage() . '">
        </form>';
        
           echo '<div>' . " " . $displayStudent->getName() . '</div>';
           echo '<div>' . " " . $displayStudent->getPhone() . '</div>';
        
        };
        echo "</div>";
        
        
    
}
}
?>

           

           
            