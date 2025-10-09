<!DOCTYPE html>
<html lang="en">
<head>
 <title>Document</title>
</head>
<body>
    <!-- methods - get and post using this method for get data or psot data from client side side to server side. 
    heder(Location:page name); use  for page redirection if your want to move another page 
    isset() iska use jab ham current file me is php code likhte se to chahte he ki hamare kisi specic word ke baad wo code chale
    like - i want username and pass - want that data after user submit that data  
    isset() you can write like this 
    if(isset($_POST['actionname'])){
        code...... that your want to perform after action;
    } -->
    <center>
<br><br>

        <!-- <form method=get action='CheckLogin.php'> -->
            <form method=post action='userlogininter.php'>
            <table border=1>
            <tr>
                <th>User Name</th>
                <td><input type=text name=txtuser></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type=password name=txtpass></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name=subbtn>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
        </form>

     <!-- -------   php file is here ----------- -->

    <!-- agr me internal php code ka use karungi to run time me ye code pahle hi chal jaega jabki ham chahte he ki jab ham but button per click kare tab ye chec kare user name and pass valid hai ya nahi 
    iske solution ke liye hamre pass php me ek function hota he -------
    isset()-->
 
    <!-- agr ham chahte he ki agar user galat id pass enter kare to tab use invalid user show jo lekin agar user valid userid print enter kare to wo ek naye oage per redired ho jaye uske like php me ek function hota he 
    header("Location:file name"); -->

    <?php

    if(isset($_POST['subbtn']))
    {
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];

            // echo $user." ";
            // echo $pass;
            // check login 
            if(strcmp($user,"Nikita")==0 && strcasecmp($pass,"bhopal")==0){
                // echo "<font color=green size=5>You are valid user </font>";
                header("Location:welcomepage.php");
            }else{
                echo "<font color=red size=5>You are invalid user </font>";

            }

    }
    
    ?>
</center>
</body>
</html>