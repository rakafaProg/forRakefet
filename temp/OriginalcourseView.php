<!--?php include '..\..\tepmlates\header.php' ?-->
<?php

class CourseView{

public function output(){
    
    
        $businessLogic = new BL();
        $courseObjectsArray =  $businessLogic->getCourse();


        echo "<div class=\"col-sm-2 sidenav\" id=\"course\">";
             
        echo "<h3>courses</h3>";

        foreach ($courseObjectsArray as $courseObject => $displayCourse) { 
            
            // absolute image path to picture on file- correct address but doesn't show
            //  echo '<a href=# ><img value= "'. var_export($displayCourse, true) . '" class="courseId" width=50 src="' . (realpath(dirname(__FILE__) . '../../../resources/pictures/course/' . $displayCourse->getImage())).'"></a>';
            // works with image src url saved to database
            //var_export need to make certain the contents doesn't include "' broke the code!!
            echo '<a href=# ><img value= "'. var_export($displayCourse, true) . '" class="courseId" width=75 src="' . $displayCourse->getImage().'"></a>';
            echo '<div>' . " " . $displayCourse->getName() . '</div>';
        
        }
        echo "</div>";
        
    
        // . $displayStudent->getcourseID()
  
}
}
?>

