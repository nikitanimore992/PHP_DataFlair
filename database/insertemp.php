
<html><head><title>php cookies</title></head>


<body>
<center>

    <!-- 
    //connection
    // query
    // close
    for stablist with php we allready have a mathod that is mysqli_connect(); ye function multiple parameter lea hai jabse pahla perameter hai he ip address lekin sir hamara databse usi machine per he jis per ham abhi kam kar rahe he  second pearameter apko lagta user id joapki mynsql ki user id he hamre pss root he or third paramerter he password jo hamne abhi php me set nahi ki he to use ham blank chod denge like this ("") and fourth parameter is apke database ka name jis  
    mysqli_connect("url","root","password","databasename");ye connection stablish karega to hame return karega connection ka ek object  jise name hamne rakh diya 
    $mycon=mysqli_connect("url","root","password","databasename"); 
    or agar hamara connection succsessfully ho gaya he to hame en msg pring ho jaye connection successfull otherwise connection unsuccessfull
     $mycon=mysqli_connect("url","root","password","databasename"); 
     echo "connection succes";
    ke name se -->
    <form action="insertemp.php" method="post">
        <table border=1>
            <tr>
                <th>Enter Employe Id</th>
                <td><input type="number" name="userid"></td>
            </tr>
            <tr>
                <th>Enter Employe Name</th>
                <td><input type="text" name="textname"></td>
            </tr>
            <tr>
                <th>Enter Employe Salary</th>
                <td><input type="number" name="salary"></td>
            </tr>
            <tr>
                <th>Enter Employe Department</th>
                <td><input type="text" name="textdept"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value=submit name="submitbtn"></td>
            </tr>
        </table>
    </form>
   <?php
    if(isset($_POST['submitbtn'])){
        $eid =$_POST['userid']; 
        $ename =$_POST['textname']; 
        $esal =$_POST['salary']; 
        $edept =$_POST['textdept']; 
        
    $mycon=mysqli_connect("localhost","root","","mynewdatabase");
    echo "conection success";
    $sql="insert into emp values(?,?,?,?)";
    $ps= $mycon->prepare($sql);
    $ps->bind_param("isis",$eid,$ename,$esal,$edept);
    $ps->execute();
    echo "Record inserted successfully";
    }
    

?> 
</center>
</body>
</html>