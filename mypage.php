
<html><head><title>php cookies</title></head>


<body>
<center>
   <?php
    $user = $_POST['txtuser'];
    $pass = $_POST['txtpass'];

    echo "user name is ".$user;
    echo ", passwprd is ".$pass; 
    // session ko use karne se pahle use start karna hota he 

    session_start(); //ese likhna padta he 
    $_SESSION['username']=$user;
    $_SESSION['password']=$pass; 



?> 
<form action="mypage1.php" method=post >
    <input type="submit" value=Submit>
</form>
</center>
</body>
</html>