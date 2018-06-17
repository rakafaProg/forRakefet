<?php 
    require_once (realpath(dirname(__FILE__) . '/../DB/bl.php'));
    require_once (realpath(dirname(__FILE__) . '/../models/Students.php'));
    require_once (realpath(dirname(__FILE__) . '/../models/Courses.php'));
    require_once (realpath(dirname(__FILE__) . '/../models/Admins.php'));
    require_once (realpath(dirname(__FILE__) . '/../views/routes.php'));
    $param= "/avielz/Dov/guy_12-4-2018_PHP/php-mvc-courses/";//set the default base tag URL line 23
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header main view</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <base href="<?php echo $param; ?>" target=""> 
    <!-- <base href="<?php echo $param; ?>" target="_blank">  -->
    <link rel="stylesheet" href="client/css/app.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <img width=50 src="https://i.pinimg.com/474x/b1/d1/92/b1d192c20b12ed0f156052f5ce0ece7d--book-tattoo-harry-potter-hogwarts.jpg">
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <!-- by clicking the navbar links the $_REQUEST in index.php sets values and the routes.php redirects -->
                <li class="active"><a href="?controller=main&action=student">School</a></li>
                <li><a href="?controller=admin&action=admins">Administration</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <img width=50 src="https://zookeepersblog.files.wordpress.com/2013/09/2-computer-generated-male-face.jpg">
            </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center">    
    <div class="row content">





