
<html>
<head>
   <title>php</title>
</head>
<body>
   <!-- action="./FILES_superglobal.php" -->
   <form  action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileupload" id="fileupload">
    <br><br><br>
    <button type="submit" name="uplbtn">upload</button>
   </form> 
  
</body>
</html>

<?php 
   if(isset($_POST['uplbtn'])){

      if($_FILES['fileupload']){
      $path = $_FILES['fileupload']['name'];
      $upload_path = "./uploads/".$path;

      //  move_uploaded_file($_FILES['fileupload']['tmp_name'],$upload_path)|| die ("Filed to upload ");
      if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$upload_path)){
         echo "file upoad success";
      }else{
         die ("faild to upload file");
      }

   }else{
      echo "no file Found";
   }

   }
?>