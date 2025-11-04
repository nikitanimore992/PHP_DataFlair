

<?
//   $file = './files/dummy.text';
//   // Set the file to read-only  
//   $myFile = fopen($file, 'r'); // Open the file in read mode    
//   echo fread($myFile, filesize($file)); // Read the file content
//   fclose($myFile); // Close the file

if(isset($_POST['file'])){
    print_r($_FILES['file']); 
    $myFile = fopen($file, 'r') or die ("unable to read file ");// Open the file in read mode    
    echo fread($myFile, filesize($file)); // Read the file content
    fclose($myFile);
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br><br><br>
    <button> read Only</button>
</form>