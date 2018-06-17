<?php

class adminContainerView{

    
    public function output(){
    
    
        $businessLogic = new BL();
        $adminObjectsArray =  $businessLogic->getAdmin();
            
        echo '<div class="col-sm-8 text-left" id="mainContainer">
                <h4>Total number of Admins: </h4>
                <p id= "adminNum">';
        echo count ($adminObjectsArray);
        echo '</p>';
           
        echo '</p>
            
                <hr>
                <h4>Details</h4>';
//////////////////////////////////////////////////////////////////////
//show student or course clicked on image in container view
        // this show method relies on the toString() i put later into the students and courses class
        if( isset($_POST["addAdminBtn"])){
                foreach ($adminObjectsArray as $adminObject => $displayAdmin) { 
                        if (($displayAdmin->getAdminID()) == ($_POST['addAdminBtn'])) {
                                echo $displayAdmin;  
                        }
                }
        }


        ////////////////////////// addind an admin to DB 
        if (isset($_POST['role'])) {
                               
                if ((($_POST['role']) != ("manager")) && (($_POST['role']) != ("sales"))){
                        $message = "Cannot add administrator: Role must be either manager or sales.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        exit("some exit message");
                }
                else{
                                // $message = "cululucululu";
                                // echo "<script type='text/javascript'>alert('$message');</script>";
                                // echo $_POST['name'];
                                $imageName = $_FILES['image']['name'];
                                $tempImage = $_FILES["image"]["tmp_name"];
                                $notesCtrl = new AdminController();
                                $notesCtrl->insertAdmin($_POST);
                                $notesCtrl->insertImageFile($imageName, $tempImage);
                                // refresh the page- the header("Refresh:0"); didn't work
?>
                                <script type="text/javascript">
                                window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>';
                                </script>
<?php
                        
                }
        }
?>
<?php
        //////////////////////// adding the add student/course window
        // show add student/course modal when +student/course is pressed
        if (isset($_POST['addAdminBtn'])) {
                $target_file= '../../resources/pictures/admin/';
                $addAdminView = new addAdminView();
                $addAdminView ->output($target_file);
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
