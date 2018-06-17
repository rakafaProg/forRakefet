<?php
 
if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action     = $_REQUEST['action'];
    // $id         =$_REQUEST['id'];
} else {
    $controller = 'login';
    $action     = 'login_page';
    // $id         = -1;
}

  require_once('views/layout.php');
