<!DOCTYPE html>
<html>
<head>
    <title>php Array page</title>
</head>
<body>
    <center>
        <br>
        <br>
    <?php 
    // array is collection of same type of data or you can say array is a arrange is collection of same type of arrenge and disarrange data.
    // meand its is a collection of homegeneous and heterogeneous data.
    /* abhi tak hamne dekha ki ham ki kisi bade data set per kam nahi kar rahe the 2 ya 3 ke pair me hamare pass data available the 
    lekin yadi apki requirement he like you have 
    (bulk amount of data) like a large data set ab agar apko un data per koi operation perform karna he like searching, shorting 

    now how to diclare array in php----------------
        there are multiple ways to diclare array 

    */
        // $arr = array("indore","bhopal","Delhi","Raipur","pune");
        // array me har ek element ek index value pr store hota he , and wo indexing start hoti he 0 se 
        
        $arr = array("indore","bhopal","Delhi","Raipur","pune");
                     // 0       1         2        3       4
        //echo $arr; Warning: Array to string conversion in E:\xampp\htdocs\DataFlair\13.Array.php on line 23 
        // ye hame warning de raha he ki jab bhi ap array ko print karna chahte ho to php me apko print_r() ka use karna hota he 
        print_r($arr);
         // ab agar me ise print karu to output mujhe kuch esa milega
        //  Array ( [0] => indore [1] => bhopal [2] => Delhi [3] => Raipur [4] => pune )
        // ab agar me chahti hu ki array me available sabhi element ek ek karke print ho jaye lets do it for example .
        
        for($i=0;$i<count($arr);$i++){
            echo $arr[$i];
            // print_r($arr[$i]);
            echo "<br>";
        }
        echo "<br>";

        $i=0;
        while($i<count($arr)){
            //  echo $arr[$i];
             print_r($arr[$i]);
            echo "<br>";
            $i++;
        }

       // yaha per kya hau array ki apni indexing rahi like 0,1,2,3 ab agar ham chahte he hamara apna incex ho 
       //Associative Array - ham array ka index na lekr apna index use kare means jaha per key value ke sath associate hoti he 

       $arr1=["a"=>"delhi","b"=>"pune","c"=>"Bhopal","d"=>"indore","e"=>"noida",];
       print_r($arr1);
        echo "<br>";

        $arr2 = array("indore","bhopal","Delhi","Raipur","pune",34.66,456,true);
        print_r($arr2)

        // means agar apko same type of data use karna ya dissimilar type of data use karna to bhi ap ise kar sakte he 
    ?>
    </center>
</body>
</html>