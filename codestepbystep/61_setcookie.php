<?php

 setcookie("fruit","mango",time()+3600);
 setcookie("vegitables","carrot",time()+7200);

 if(isset($_COOKIE['fruit'])){
    echo "fruit is : ".$_COOKIE['fruit'];
    }else{
    echo "no fruit found";
    }
     echo "<br>";

if(isset($_COOKIE['vegitables'])){
    echo "vegitables is : ".$_COOKIE['vegitables'];
    }else{
    echo "no vegitables found";
    }
    echo "<br>";
    print_r($_COOKIE);
?>