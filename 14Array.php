<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php array page </title>
</head>
<body>
    <?php 
    // inbuild function in Array
    $array1= array("Mon","Tue","Wed","Sat");
    $array2= array("Mon","Wed","Thus","Feb","Tue");
    $array3= array("Mon","Wed","Fri","Jan","Sat");

   $newAray = array_intersect($array1,$array2);
   print_r($newAray);
   // array_intersect() ek predifine function array ka jiska use karke do arrays ke bich me jo bhi element common he use print karta he a
    echo"<br>";
   $newAr = array_diff($array1,$array2);
   print_r($newAr);
   echo "<br>";
//    yaha kya ho raha 
    ?>
    
</body>
</html>