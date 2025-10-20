

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>file creating</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <input type="text" placeholder="Enter file name" name="filename"/>
            <br><br>
            <textarea name="content" ></textarea>
            <br><br>
            <button>cretae file </button>

        </form>
        <?php
        if(isset($_POST['filename'])){ 

            $filename = "./files/".$_POST['filename']; // file name (use .txt instead of .text)
            $content = $_POST['content']; // content to write in file

            $file = fopen($filename, "w") or die("Unable to create file!"); // open or create file

            fwrite($file, $content); // write content to file
            fclose($file); // close file

            echo "File has been created successfully.";

        }
        ?>
    </center>
    
</body>
</html>