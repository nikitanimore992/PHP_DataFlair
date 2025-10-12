<html><head><title>student page</title></head>
<body>
<center>
    <form action="insertstudata.php" method="post">
         <table>
            <tr>
                <th>Enter Student Id</th>
                <td><input type="number" name="stuid"></td>
            </tr>
            <tr>
                <th>Enter Student Name</th>
                <td><input type="text" name="stuname"></td>
            </tr>
            <tr>
                <th>Enter Math Marks</th>
                <td><input type="number" name="math"></td>
            </tr>
            <tr>
                <th>Enter Chemestry Marks</th>
                <td><input type="number" name="chem"></td>
            </tr>
            <tr>
                <th>Enter Physics Marks</th>
                <td><input type="number" name="phy"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name="submitbtn"></td>
            </tr>
         </table>
    </form>


<?php 
            if(isset($_POST['submitbtn'])){
                $sid=$_POST['stuid'];
                $sname=$_POST['stuname'];
                $math=$_POST['math'];
                $chemestry=$_POST['chem'];
                $physics=$_POST['phy'];

               $mycon=mysqli_connect("localhost","root","","mynewdatabase");
               echo "conecction successfull";
               $sql="insert into student values(?,?,?,?,?)";
               $ps=$mycon->prepare($sql);
               $ps->bind_param("isiii",$sid,$sname,$math,$chemestry,$physics);
               $ps->execute();
               echo "data ensition successfully";
            }
?>

</center>
</body>
</html>