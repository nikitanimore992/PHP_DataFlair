

<!DOCTYPE html>
<html lang="en">
<head>
    <title>cookie</title>
</head>
<body>
   <center>
    <form action="" method="post">
    <input type="text" name="user" placeholder="Enter your name">
    <br><br><br>
    <button name="butn" value="set">set cookies</button>
    <br><br><br>
    <button name="butn" value="display">display cookies</button>
    <br><br><br>
    <button name="butn" value="delete">delete cookies</button>
    <br><br><br>
    <hr>
    <br><br><br>
</form>

<?php
 if(isset($_POST['butn'])){
    if($_POST['butn']=="set"){
        $username = $_POST['user'];
        setcookie("username",$username,time()+3600);
        echo "Cookie is set ";//$username;
 }
 if($_POST['butn']=="display"){
    if(isset($_COOKIE['username'])){
        echo "User Name is : ".$_COOKIE['username'];
    }else{
        echo "No cookie found";
    }
 }
    if($_POST['butn']=="delete"){
        setcookie("username",null,-1);
        echo "Cookie is deleted";
    }

}
?>
   </center>
</body>
</html>