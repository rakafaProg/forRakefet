<!--?php include '..\..\tepmlates\header.php' ?-->
<?php

class ContainerView{

    
    public function output(){
    
    
        $businessLogic = new BL();
        $courseObjectsArray =  $businessLogic->getcourseID();
        $studentsObjectsArray =  $businessLogic->getstudentID();
    
        echo '<div class="col-sm-8 text-left" id="mainContainer">
                <h4>Total number of students: </h4>
                <p id= "studentNum">';
        echo count ($studentsObjectsArray);
        echo '</p>
                <h4>Total number of courses: </h4>
                <p id= "courseNum">';
        echo count ($courseObjectsArray);        
        echo '</p>
            
                <hr>
                <h4>Details</h4>';
//////////////////////////////////////////////////////////////////////
?>
<script>
    
    $('.studentId').on('click', function () {
    
    $value = $(this).attr('value');
    $arr = $value.split(',');
    $('#details').html("<span>"+ $arr[1] + "</br>" + $arr[2] + "</br>" + $arr[3] +"</span>" );
     
    }); 

    $('.courseId').on('click', function () {
    
    $value = $(this).attr('value');
    $arr = $value.split(',');
    $('#details').html("<span>"+ $arr[1] + "</br></br>" + $arr[2] + "</br></br>" + $arr[3] +"</span>" );
     
    }); 
</script> 

<?php
    
 ////////////////////////////////////////////////////////////////       
        echo '<p id= "details"></p>
            
                </div>
            </div>
        </div>';
        
        //   function runMyFunction() {
        //     echo 'I just ran a php function';
        //   }
        
        //   if (isset($_GET['student'])) {
        //     runMyFunction();
        //   }
        
        
    
        // <!-- <a href='index.php?hello=true'>Run PHP Function</a> -->
        
      
    
}
}
?>

