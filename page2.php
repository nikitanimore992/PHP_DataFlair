
<html><head><title>php cookies</title></head>


<body>
<center>
   <?php
    $user=$_COOKIE['username'];
    $pass=$_COOKIE['password'];

    echo "user name in second page ",$user;
    echo "<br>password in second page ".$pass;
?> 
</center>
</body>
</html>