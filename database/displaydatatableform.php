<html><head><title>data php page</title></head>
<body>


<?php 
$mycon=mysqli_connect("localhost","root","","mynewdatabase");
echo "connection successfull<br>";
$sql="select * from emp";
$record=$mycon->query($sql);
$n=mysqli_num_rows($record);
echo "total record<br>";
if($n>0){
    // echo $n;
    echo "<table border=1>";
    echo "<tr><th>Emp ID</th><th>Emp Name</th><th>Emp salary</th><th>department</th></tr>";
    while($row=mysqli_fetch_assoc($record)){ // record object se data fetch karne ke liye is function use karte hai 
        echo "<tr>";
        echo "<td>".$row['empid']."</td>";
        echo "<td>".$row['empname']."</td>";
        echo "<td>".$row['salary']."</td>";
        echo "<td>".$row['department']."</td>";
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
}
else{
    echo "Record not found";
}
$mycon->close();

?>
</body>
</html>