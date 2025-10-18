<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SESSION</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter your name">
        <br><br>
    <button
     name="butn" value="set">set session</button>
     <br><br>
    <button
     name="butn" value="display">display  session</button>
     <br><br>
    <button
     name="butn" value="delete">delete session</button>
     <br><br><hr><br><br>
    </form>

    <?php
    if(isset($_POST['butn'])){
        session_start();
        if($_POST['butn']=="set"){
            $username = $_POST['user'];
            $_SESSION['username']=$username;
            echo "Session is set ";
     }
     if($_POST['butn']=="display"){
        if(isset($_SESSION['username'])){
            echo "User Name is : ".$_SESSION['username'];
        }else{
            echo "No session found";
        }
     }
        if($_POST['butn']=="delete"){
            session_unset();
            session_destroy();
            echo "Session is deleted";
        }

    }
    ?>
</body>
</html>