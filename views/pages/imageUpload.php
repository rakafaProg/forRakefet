<?php
    class imageUpload{

        public function uploadImage($imageName, $tempImage){
                // $image = $_FILES['image']['name'];

                // image file directory
                $message = "imageUpload.php started";
                echo "<script type='text/javascript'>alert('$message');</script>";

                // rakefet - changed target
                $target_dir = "resources/pictures/admin/";
                //$target_dir = "../resources/pictures/admin/";

                $target_file = $target_dir . $imageName;

                if (move_uploaded_file($tempImage, $target_file)) {
                echo "The file ". $imageName. " has been uploaded.";
                } else {
                echo "Sorry, there was an error uploading your file.";
                }
        }
    }

?>
