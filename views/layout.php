
<?php 

//creating $newPath a dynamic path for future use
$path = realpath(dirname(__FILE__) . '/../');

$pieces = explode("\\", $path);
array_shift($pieces);

$pieces[0]="http:/";

$pieces[1]="localhost";

$newPath= implode("/",$pieces);
//--------------------------------------
require_once('routes.php');

?>

