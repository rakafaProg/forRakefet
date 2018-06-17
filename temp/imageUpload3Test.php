<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "moodle");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
		$image = $_FILES['image']['name'];
		if (!$image){
			$image="";
		}
  	 // image file directory
    $target_dir = "../resources/pictures/admin/";
      // $target_dir = ((realpath(dirname(__FILE__) . '/../resources/pictures/admin/)');
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			// insert image path and file name into DB
			$sql = "INSERT INTO images (image) VALUES ('$target_file')";
			mysqli_query($db, $sql);
        // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    	} else {
        echo "Sorry, there was an error uploading your file.";
    }
  }
  // $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
<style>

   #content {
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }

   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">

  <?php
    // while ($row = mysqli_fetch_array($result)) {
    //   echo "<div id='img_div'>";
    //       echo "<img src='../resources/pictures/admin/".$row['image']."' >";
         
    //   	echo "<p>".$row['image_text']."</p>";
    //   echo "</div>";
    // }
  ?>
  <form method="POST" action="imageUpload3Test.php" enctype="multipart/form-data" >
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image" onchange="readURL(this);">
  	</div>
		<img id="myimage" src="" alt="Image preview" />
  	<div>
  		<button type="submit" name="upload">Submit</button>
  	</div>
  </form>
</div>
<script>
//show image preview before upload
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#myimage')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(165);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>
</body>
</html>