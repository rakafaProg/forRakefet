<?php

class ContainerView{

    
    public function output(){
    
    
        $businessLogic = new BL();
        $courseObjectsArray =  $businessLogic->getCourse();
        $studentsObjectsArray =  $businessLogic->getStudent();
    
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
//show student or course clicked on image in container view

        // first method works but  needed to create different connection and fetch to DB 
        // $link=mysqli_connect("localhost","root","");
        // mysqli_select_db($link,"moodle");
        // /* check connection */
        // if (mysqli_connect_errno()) {
        //         printf("Connect failed: %s\n", mysqli_connect_error());
        //         exit();
        // }
        // if( isset($_POST["picture"])){
        // $valueIdTest = $_POST['picture'];
        //         $query = "SELECT * FROM `student` WHERE `studentId` = $valueIdTest";
        //         $res = mysqli_query($link,$query);
        //         while ($row=mysqli_fetch_array($res)){
                // echo '<div><span><b>Id: </b>'.$row["studentId"]."</span><br><span><b>Name: </b>".$row["name"]."</span><br> <span><b>Phone: </b>".
                // $row["phone"].'</span><br><span><b>Email: </b><a href="mailto:'.$row["email"].'">'.$row["email"].'</a></div>';
                // }
                
        // }

        // if( isset($_POST["course"])){
        //         $valueIdTest = $_POST['course'];
        //         $query = "SELECT * FROM `course` WHERE `courseId` = $valueIdTest";
        //         $res = mysqli_query($link,$query);
        //         while ($row=mysqli_fetch_array($res)){
        //         echo '<div><span><b>Course Id: </b>'.$row["courseId"]."</span><br><br>
        //         <span><b>Course title: </b>".$row["name"]."</span><br><br><span><b>Course description: </b>".$row["description"].'</div>';
        //         }
        // }

        // this show method relies on the toString() i put later into the students and courses class
        if( isset($_POST["picture"])){
                foreach ($studentsObjectsArray as $studentObject => $displayStudent) { 
                        if (($displayStudent->getstudentsID()) == ($_POST['picture'])) {
                                echo $displayStudent;  
                        }
                }
        }

        if( isset($_POST["course"])){
                foreach ($courseObjectsArray as $courseObject => $displayCourse) { 
                        if (($displayCourse->getcourseID()) == ($_POST['course'])) {
                                echo $displayCourse;  
                        }     
                }
                
        }
        ////////////////////////// addind a student to DB 
        if (isset($_POST['studentId'])) {
                // $message = "cululucululu";
                // echo "<script type='text/javascript'>alert('$message');</script>";
                // echo $_POST['name'];
                $notesCtrl = new MainController();
                $notesCtrl->insertStudent($_POST);
                // refresh the page- the header("Refresh:0"); didn't work
?>
                <script type="text/javascript">
                window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>';
                </script>
<?php
        }
        ////////////////////////// addind a course to DB 
        if (isset($_POST['courseId'])) {
                        // $message = "cululucululu";
                        // echo "<script type='text/javascript'>alert('$message');</script>";
                        // echo $_POST['name'];
                        $notesCtrl = new MainController();
                        $notesCtrl->insertCourse($_POST);
                        // refresh the page- the header("Refresh:0"); didn't work
        ?>
                        <script type="text/javascript">
                        window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>';
                        </script>
        <?php
                }
        ?>

        <!-- adding the add student/course window-->
                
                
                <div id="id01" class="modal">
                
                <form method="POST" class="modal-content animate" action="">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="https://i.pinimg.com/474x/b1/d1/92/b1d192c20b12ed0f156052f5ce0ece7d--book-tattoo-harry-potter-hogwarts.jpg" alt="Avatar" class="avatar">
                        </div>
                        <div>
                                <h4>Add Student</h4>
                        </div>

                        <div class="container">
                        
                        <form action="" method="POST">  
                                        <?php 
                                        $fileds = array('studentId', 'name', 'phone', 'email', 'image');
                                        for($i=0; $i < count($fileds); $i++) {
                                        echo '<div class="form-group">';
                                        echo '<label for="'.$fileds[$i].'">'.$fileds[$i].'</label>';
                                        if ($fileds[$i] == 'studentId')
                                                echo '<input type=number name="'.$fileds[$i].'" id="'.$fileds[$i].'" placeholder="'.$fileds[$i].'" required>';
                                        else 
                                                echo '<input name="'.$fileds[$i].'" id="'.$fileds[$i].'" placeholder="'.$fileds[$i].'" required>';
                                        echo '</div>';
                                        }
                                        ?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                        </div>

                        
                        <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        
                        </div>
                </form>
                </div>

                <div id="id02" class="modal">
                
                <form method="POST" class="modal-content animate" action="">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="https://i.pinimg.com/474x/b1/d1/92/b1d192c20b12ed0f156052f5ce0ece7d--book-tattoo-harry-potter-hogwarts.jpg" alt="Avatar" class="avatar">
                        </div>
                        <div>
                                <h4>Add Course</h4>
                        </div>
                        <div class="container">
                        
                        <form action="" method="POST">  
                                        <?php 
                                        $fileds = array('courseId', 'name', 'description', 'image');
                                        for($i=0; $i < count($fileds); $i++) {
                                        echo '<div class="form-group">';
                                        echo '<label for="'.$fileds[$i].'">'.$fileds[$i].'</label>';
                                        if ($fileds[$i] == 'courseId')
                                                echo '<input type=number name="'.$fileds[$i].'" id="'.$fileds[$i].'" placeholder="'.$fileds[$i].'" required>';
                                        else 
                                                echo '<input name="'.$fileds[$i].'" id="'.$fileds[$i].'" placeholder="'.$fileds[$i].'" required>';
                                        echo '</div>';
                                        }
                                        ?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                        </div>

                        
                        <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                        
                        </div>
                </form>
                </div>

                <script>
                // Get the modal
                var modal = document.getElementById('id01');
                var modal2 = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                if (event.target == modal) {
                        modal.style.display = "none";
                }else{
                                if (event.target == modal2) {
                                modal2.style.display = "none";       
                                }
                        }
                }
                </script>
<?php
// show add student/course modal when +student/course is pressed
        if (isset($_POST['addStudentBtn'])) {
                
                echo "<script type='text/javascript'>
                        modal.style.display = 'block';
                      </script>";
                
        }
        if (isset($_POST['addCourseBtn'])) {
                
                echo "<script type='text/javascript'>
                        modal2.style.display = 'block';
                      </script>";
                
        }
?>
<?php
        

        echo '

                </div>
            </div>
        </div>';

                

    
   }
}

?>
