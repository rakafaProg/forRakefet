<?php

 if( isset($_POST["name"]) && isset($_POST["age"] ))
 {
    
 echo "<div>"."Welcome ". $_POST['name']. "<br />";
 echo "You are ". $_POST['age']. " years old.". "<br />";
 $_POST['key'] = "foo";
echo $_POST['key'].$_POST['picture']."</div>";
 exit();
 }
?>
<html>
<body>
 <form action="<?php $_PHP_SELF ?>" method="POST">
 Name: <input type="text" name="name" />
 Age: <input type="text" name="age" />
 <input type="image" name="picture" value="uglyFace" alt="blue" width=50 src="https://cdn-images-1.medium.com/fit/c/120/120/0*hO0lTyTY7ZrC5bE2.jpeg">
 
 
 </form>
</body>
</html>