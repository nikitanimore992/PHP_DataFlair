
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

                // call by value
                function show($a,$b){
                    $a = $a + 10;
                    $b = $b + 20;
                }
                $a = 50;
                $b = 100;
                show($a,$b); // call by value
                echo $a." ".$b;
                    echo "<br>";
                // call by reference
                function shows(&$c,&$d){ // & ye sign lagane se wo call by reference ho jata he
                    $c = $c + 10;
                    $d = $d + 20;
                }
                $c = 50;
                $d = 100;
                shows($c,$d); // call by value
                echo $c." ".$d;
                echo "<br>";

                    // another example of call by reference
                    function swap(&$a,&$b){
                        $c = $a;
                        $a = $b;
                        $b = $c;
                    }
                    $a=60;
                    $b=90; 
                    echo "<br>Before swaping ".$a." ".$b;
                    swap($a,$b);
                    echo "<br>after swaping ".$a." ".$b;
                    echo "<br>";
               ?>
    </center>
</body>
</html>