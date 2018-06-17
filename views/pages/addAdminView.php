<?php
    class addAdminView{

        public function output($target_file){
            // echo "<script type='text/javascript'>
            //             modal.style.display = 'block';
            //           </script>";
?>
            <div id="id01" class="modal">
                <!-- <form name="upload" method="POST" action="adminContainerView.php" enctype="multipart/form-data">  -->

                <!-- rakefet -  Should be a Div and not a FORM!!! You can't have a form inside form -->
                <div  class="modal-content animate" >
<!-- maybe need this enctype<form method="POST" class="modal-content animate" action="" enctype= "multipart/form-data"> -->
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="https://i.pinimg.com/474x/b1/d1/92/b1d192c20b12ed0f156052f5ce0ece7d--book-tattoo-harry-potter-hogwarts.jpg" alt="Avatar" class="avatar">
                        </div>
                        <div>
                                <h4 style="text-align: center">Add administrator</h4>
                        </div>

                        <div class="container">
                        <!-- rakefet -  action should send to the same page. not admin container view. -->
                        <form action="" method="POST" enctype="multipart/form-data">
                        <!-- <form name="upload" method="POST" action="adminContainerView.php" enctype="multipart/form-data">  -->
<?php
                                        $fileds = array('id', 'name', 'role','phone', 'email','password', 'image');
                                        for($i=0; $i < count($fileds); $i++) {
                                                echo '<div style="text-align: center" class="form-group">';
                                                echo '<label for="'.$fileds[$i].'">'.$fileds[$i].': </label>';
                                                        if ($fileds[$i] == 'id'){
                                                                echo '<input type=number name="'.$fileds[$i].'" id="'.$fileds[$i].'" placeholder="'.$fileds[$i].'" required>';
                                                        }
                                                        if ($fileds[$i] == 'password'){
                                                            echo '<input type=password name="'.$fileds[$i].'" id="'.$fileds[$i].'" placeholder="'.$fileds[$i].'" required>';
                                                    }
                                                        //calls the image preview code for the form
                                                        if ($fileds[$i] == 'image'){
                                                                $imagePreview = new ImagePreview();
                                                                $imagePreview ->output($fileds,$i);
                                                        }
                                                        if ( !in_array(($fileds[$i]), array('id','image', 'password'), true ) ) {
                                                            echo '<input name="'.$fileds[$i].'" id="'.$fileds[$i].'" placeholder="'.$fileds[$i].'" required>';
                                                        }
                                                        echo '</div>';
                                        }
?>
                                        </div>
                                        <div class="container" style="text-align: center">
                                            <img id="myimage" src="" alt="Image preview" />
                                            <div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
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
                    modal.style.display = 'block';
                    var modal2 = document.getElementById('id02');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                                modal.style.display = "none";
                        }
                            else{
                                if (event.target == modal2) {
                                    modal2.style.display = "none";
                                }
                            }
                    }
                </script>
<?php
        }
}
?>
