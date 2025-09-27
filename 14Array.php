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
    //    yaha per ham don array ko complare kar rahe he per out me hame only sat == hi mila 
    // yaha pr array1 to array to se compare kar rahe jism ejo bhi element array one array2 me nahi he bs use hi show karega matlb kuch esa jo only array 2 me he but array1 me nahi nahi show nahi hoga

    $newa = array_slice($array1,1,3,true);
    print_r($newa);
    // iska use bade array se koi particual array nikalna he to uske liye use karte he 

    ?>
    
</body>
</html>