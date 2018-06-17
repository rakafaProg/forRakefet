<!--?php include '..\..\tepmlates\header.php' ?-->
<?php

class CourseView{

public function output(){
    
    
        $businessLogic = new BL();
        $courseObjectsArray =  $businessLogic->getCourse();


        echo "<div class=\"col-sm-2 sidenav\" id=\"course\">";
             
        echo '<h3>courses
        <span> 
        <form action="" method="POST">
            <span> 
            <p type="button" class="btn btn-default btn-sm">
            <button type=submit" class="glyphicon glyphicon-plus" name="addCourseBtn"></button>
            </p>
            </span>
                
        </form>
    
    </span>
        </h3>';

        foreach ($courseObjectsArray as $courseObject => $displayCourse) { 
            
            // absolute image path to picture on file- correct address but doesn't show
            //  echo '<a href=# ><img value= "'. var_export($displayCourse, true) . '" class="courseId" width=50 src="' . (realpath(dirname(__FILE__) . '../../../resources/pictures/course/' . $displayCourse->getImage())).'"></a>';
            // works with image src url saved to database
            //var_export need to make certain the contents doesn't include "' broke the code!!
            echo '
            <form action="" method="POST">
            <input type="image" class="courseId" name="course" value="'. $displayCourse->getcourseID() .'" alt="courseImage" width=70 src="' . $displayCourse->getImage() . '">
            </form>';
            echo '<div>' . " " . $displayCourse->getName() . '</div>';
        
        }
        echo "</div>";
        
    
       
  
}
}
?>

