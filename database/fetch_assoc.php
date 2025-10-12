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
    while($row=mysqli_fetch_assoc($record)){ // record object se data fetch karne ke liye is function use karte hai 
        echo $row['empid']." ".$row['empname']." ".$row['salary']." ".$row['department']." ";
        echo "<br>";
    }
}
else{
    echo "Record not found";
}

?>
</body>
</html>