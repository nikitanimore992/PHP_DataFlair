
<html><head><title>php cookies</title></head>


<body>
<center>
<?php
  $user = $_POST['txtuser'];
  $pass = $_POST['txtpass'];
    
  $ckname="username";
  $ckvalue=$user;
  $ckpass="password";
  $ckpassvalue=$pass;

  setcookie($ckname,$ckvalue);
  setcookie($ckpass,$ckpassvalue);

  echo "user name is ",$user;
  echo "<br>password is ",$pass

?>
<form action="page2.php" method=post>
    <input type="submit" value=Submit>
</form> 
</center>
</body>
</html>