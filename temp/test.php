<?php
 if( isset($_POST["name"]) && isset($_POST["age"] ))
 {
 echo "Welcome ". $_POST['name']. "<br />";
 echo "You are ". $_POST['age']. " years old.". "<br />";
 $_POST['key'] = "foo";
echo $_POST['key'];
 
 }
?>
<html>
<body>
 <form action="<?php $_PHP_SELF ?>" method="POST">
 Name: <input type="text" name="name" />
 Age: <input type="text" name="age" />
 <input type="submit" />
 </form>
</body>
</html>