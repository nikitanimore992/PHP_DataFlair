<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php array page </title>
</head>
<body>
<center>
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
    // yaha per ham don array ko complare kar rahe he per out me hame only sat == hi mila 
    // yaha pr array1 to array to se compare kar rahe jisme jo bhi element array one array2 me nahi he bs use hi show karega matlb kuch esa jo only array 2 me he but array1 me nahi nahi show nahi hoga

    $newa = array_slice($array1,1,3,true);
    print_r($newa);
    // iska use bade array se koi particual array nikalna he to uske liye use karte he 
    echo("<br>");

    $array4 = array("Nikita","Yogita","Pramod","Anuradha","Mahesh","Nikita","Mahesh","Pramod");
    $newarr = array_unique($array4);
    print_r($newarr);
    // array_unisque is function ka use ham kisi array me mojud duplicate value ko hata ke cable or cable unique value print karate he means wo value dowara print nahi hogi ;
   
    echo("<br>");

    function multi($n){
        return $n*5;
    }
    $array5 = array(5,6,7,8,9,10,20,50);
    $newarray = array_map('multi',$array5);
    print_r($newarray);
       echo "<br>";
    // ab agar ham chahte he hamare array mojud har element ke sath koi opearation perform kiya jaye then ham log array map function ka use he 
    // array_map() function to parameter leta hai first parameter is function name that you have created and second is that array were you want to perform that operation  like we have a previous example.
   
   // ab agar me chahta hu ki mujhe ek constant array banana hai like 1 to 20 tak ka ek array create karna hai
    // yaha pr ham use karenge range()  yaha per tin parameter lete hai 
    $newArrayreange = range(1,20);
    for ($i=0; $i<count($newArrayreange);$i++){
        echo $newArrayreange[$i]."<br>";
    } 
    echo "<br>thirt paramerter <br>";
    // so this array consist an element from 1 to 20;
     $newArrayreang = range(20,40,2);
    for ($i=0; $i<count($newArrayreang);$i++){
        echo $newArrayreang[$i]."<br>";
    } 
    // ham yaha 3 parameter bhi le sakte he third parameter array ko ye bataega ki konsa konsa element print karna he hai 

   ?>
   </center> 
</body>
</html>