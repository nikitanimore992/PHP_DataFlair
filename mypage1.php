
<html><head><title>php cookies</title></head>


<body>
<center>
   <?php
    session_start();

    $uname=$_SESSION['username'];
    $upass=$_SESSION['password'];
    echo "this is second page <br>";
    echo "user name is ".$uname;
    echo "<br>user pass is ". $upass;

    session_unset();
    session_destroy();
?> 
</center>
</body>
</html>