

<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is php function page</marquee>
            <?php 
            //  a fucntion is a program which is basically use to reduce the size of main program and to make it more readable and to avoid the repitition of code
            // as you can say small modul of the program
            
            function display(){ // defining a function
                echo "hello friends";
            }
            display(); // calling a function
            echo " this is fuction";
            echo "<br>";

            function sum($a, $b){
                $c = $a + $b;
                return $c;
            }
            $num = sum(10,20);
            echo "addition is ".$num;
            echo "<br>";
            ?>
    </center>
</body>
</html>