 <?php
 
   //  print_r($_FILES);
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
   ?>