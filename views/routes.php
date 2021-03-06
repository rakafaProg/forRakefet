<?php

    function call($controller, $action) {
        // require the file that matches the controller name
        require_once('controllers/' . $controller . 'Controller.php');

            // create a new instance of the needed controller
            switch ($controller) {
                case 'login':
                    $controller = new LoginController();
                    break;
                        
                case 'main':
                    $controller = new MainController();
                    break;
                
                case 'admin':
                    $controller = new AdminController();
                    break;
                
                case 'error':
                $message = "wrong switch error";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

    // call the action
    require_once('tepmlates/header.php');
    echo $controller->{ $action }();
    require_once('tepmlates/footer.php');
    }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('login'=>['login_page'],'main'=>['student', 'mainView','studentDetails'],'admin'=>['admins', 'adminView'], 'error'=>['notSure']);

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
    if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {

            call($controller, $action);
        } else {
            call('pages', 'error');
        }
    } else {
        call('pages', 'error');
    }

?>
