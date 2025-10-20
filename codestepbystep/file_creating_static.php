
<?php 
// static way to create a file 
$filename = "./files/dummy.text"; // file name (use .txt instead of .text)
$content = "This is a dummy file."; // content to write in file

$file = fopen($filename, "w") or die("Unable to create file!"); // open or create file

fwrite($file, $content); // write content to file
fclose($file); // close file

echo "File has been created successfully.";

?>


