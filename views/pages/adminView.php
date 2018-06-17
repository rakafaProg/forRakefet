<?php

    class AdminView{

       public function output(){

                $businessLogic = new BL();
                $adminObjectsArray =  $businessLogic->getAdmin();
    

    echo "<div class=\"container-fluid text-center\">    
    <div class=\"row content\">
    <div class=\"col-sm-4 sidenav\" id=\"admin\">";
         
    echo '<h3>Administrators 
    
            <span> 
                <form action="" method="POST">
                    <span> 
                    <p type="button" class="btn btn-default btn-sm">
                    <button type=submit" class="glyphicon glyphicon-plus" name="addAdminBtn"></button>
                    </p>
                    </span>
                        
                </form>
            
            </span>
        </h3>';
    

    foreach ($adminObjectsArray as $adminObject => $displayAdmin) { 
       
        //here value of image when clicked which is passed on is the whole "array" $displayStudent
        // echo '<a href=# ><img value= "'. var_export($displayStudent, true) .'" class="studentId"  width=50 src="' . $displayStudent->getImage() . '" ></a>';
       
       //here value of image when clicked which is passed on is only the ID value in $displayStudent
    //    trying to use post method created post method in test.php in temp folder that works...
    
    
    echo '
    
    <form action="" method="POST">
    <input type="image" class="studentId" name="picture" value="'. $displayAdmin->getAdminID() .'" alt="adminImage" width=50 src="' . $displayAdmin->getImage() . '">
    </form>';
    //echo "<img src='../resources/pictures/admin/".$row['image']."' >";
       echo '<div>' . " " . $displayAdmin->getName() . '</div>';
       echo '<div>' . " " . $displayAdmin->getRole() . '</div>';
       echo '<div>' . " " . $displayAdmin->getPhone() . '</div>';
       echo '<div>' . " " . $displayAdmin->getEmail() . '</div>';
    
    };
    echo "</div>";
    
    

}
}
?>


