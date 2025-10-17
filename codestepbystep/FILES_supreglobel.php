
<html>
<head>
   <title>php</title>
</head>
<body>
   <form action="./FILES_supreglobel.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileupload" id="fileupload">
    <br><br><br>
    <button>uplod</button>
   </form> 
   <?php
   if(isset($_POST['fileupload'])){
    print_r($_FILES);
   }
   ?>
</body>
</html>