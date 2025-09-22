
<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is php page</marquee>
            <?php 
            // onece you will define the constant you can not change its value
             define("pi",3.14);
             echo pi;
            //  define("pi",3.15); // it will give error because we can not change the value of constant
            //  echo "<br>this is value of pi = ". pi;
            $r = 12;
            $a = pi * $r * $r;
            $c = 2 * pi * $r;
            echo "<br>area is ".$a;
            echo "<br>circumference is ".$c;
            //    jab bhi ham php me value ko kisi string ke sath print karana chahte he to waha ham . dot operater ka use karte he 

            ?>
    </center>
</body>
</html>