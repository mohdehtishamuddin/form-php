<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload picture</title>
</head>
<body>
    <?php
    if(isset($_FILES["image"]))
   $file_name = $_FILES['image']['name'];
   print_r($_FILES);
   $file_size = $_FILES['image']['size'];
   $file_tmp = $_FILES['image']['tmp_name'];
   $file_type = $_FILES['image']['type'];
   $allowed = ["jpg","jpeg","png"];
   $maxsize = (2*1024*1024);
   if($file_name<$maxsize)
   {
       echo true;
   }
   else{
       echo false;
   }
    
?>    
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Upload Your image</label>
    <input type="file" name="image"><br>
    <input type="submit" value="upload">
</form>
</body>
</html>