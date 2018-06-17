<?php
include_once('views/pages/adminView.php');
include_once('views/pages/adminContainerView.php');
include_once('views/pages/imagePreview.php');
include_once('views/pages/addAdminView.php');
include_once('views/pages/imageUpload.php');

class AdminController{

    
    public function admins(){
         $adminView = new AdminView();
         $adminView->output();

         $containerView = new adminContainerView();
         $containerView->output();

    }

    public function insertAdmin($admin) {
        $businessLogic = new BL();
        $businessLogic->insertAdmin($admin);
    }

    public function insertImageFile($imageName, $tempImage) {
         $message = "adminController calling insertImage";
         echo "<script type='text/javascript'>alert('$message');</script>";
        $helper = new imageUpload();
        $helper->uploadImage($imageName, $tempImage);
    }
  
    
}


?>