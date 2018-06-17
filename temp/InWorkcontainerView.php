
<?php
// require_once '/../../../tepmlates/header.php';


class ContainerView{

        
    public function output(){
        
        $businessLogic = new BL();
        $courseObjectsArray =  $businessLogic->getCourse();
        $studentsObjectsArray =  $businessLogic->getStudent();
    
    
        echo '<div class="col-sm-8 text-left" id="mainContainer">
                <h4>Total number of students: </h4>
                <p id= "studentNum">';
        echo count ($studentsObjectsArray);
        foreach($studentsObjectsArray as $key => $a) {
                
                echo '<a href="'.  $a . '">' . $key. '</a>';
        };       
        print_r ($studentsObjectsArray[0]);
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
    <?php echo '<p>' ?>$studentsObjectsArray; <?php echo '</p>
            
            </div>
        </div>
    </div>';?>

  
    }); 
</script> 

<?php
   
  
}
}
?>

