
<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is factorial function page</marquee>
            <?php 
                    // wo cancept to hame value return ke sath hame mil raha use ham kahte he call by return or jab function koi value return karta he to ham use kahte he return by value
                function factorial($n){  // ye function he jisme hamne parameter pass kiya he
                    $fact = 1;
                    for($i=1; $i<=$n; $i++){
                        $fact = $fact * $i;
                    }
                    return $fact;  // ye return by value he
                }
                $result = factorial(5); // ye call by value he
                echo "Factorial of 5 is: " . $result;
                echo "<br>";
                function fact($n){  // ye function he jisme hamne parameter pass kiya he
                    $fact = 1;
                    while($n>=1){
                        $fact = $fact * $n;
                        $n--;
                    }
                    return $fact;  // ye return by value he
                }
                $ans = fact(5); // ye call by value he
                echo "Factorial of 5 is: " . $ans;
                echo "<br>";

                // dusra hota he  ki jab function ko ham call karte he with the the call - call by value function
               ?>
    </center>
</body>
</html>