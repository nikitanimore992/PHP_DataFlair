
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
   <?php
    $mycon=mysqli_connect("localhost","root","","mynewdatabase");
    echo "conection success";

    

?> 
</center>
</body>
</html>