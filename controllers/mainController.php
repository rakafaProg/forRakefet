<?php
include_once('views/pages/studentView.php');
include_once('views/pages/courseView.php');
include_once('views/pages/containerView.php');
class MainController{

    
    public function student(){
         $studentView = new StudentView();
         $studentView->output();

         $courseView = new CourseView();
         $courseView->output();

         $containerView = new ContainerView();
         $containerView->output();

    }
    //i'm not sure this is in use!! need to check
    // public function studentDetails(){
    //     $containerView = new ContainerView();
    //     $containerView->output();
    // }

    public function insertStudent($student) {
        $businessLogic = new BL();
        $businessLogic->insertStudent($student);
    }

    public function insertCourse($course) {
        $businessLogic = new BL();
        $businessLogic->insertCourse($course);
    }
    
    
}


?>