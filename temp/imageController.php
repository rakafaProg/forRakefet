<?php
?>
<!-- <!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);">
    <input type="submit" value="Upload Image" name="submit">
</form>
<!- <div id="test"></div> -->
<!-- <div id="test2"></div> -->
<!-- <img id="myimage" src="" alt="" height="42" width="42">  --> 

<!DOCTYPE html>
<html>
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
<title>JS Bin</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
  <!-- need onchange for image preview -->
  <input type='file' name="fileToUpload" id="fileToUpload" onchange="readURL(this);" />
    <img id="myimage" src="" alt="" />
    <input type="submit" value="Upload Image" name="submit">
    </form>

<script>
//show image preview before upload
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#myimage')
                        .attr('src', e.target.result)
                        .width(50)
                        .height(65);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>
        
</body>
</html>
