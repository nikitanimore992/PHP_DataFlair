
<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is php page</marquee>
            <?php 
            /* function and methods 
             types of functions 
            be are taliking about user define functions
            jab function outside the class hote he to method kahlate he 
            or jab inside the class hote he to function kahlate he
            1. inbuild function
            2. user defined function
            a function is program which is basically used to reduce the size of program and you can you a function multiple time in one declaration 
            */
            function display(){ // defining a function
                echo "this is display function <br>";
            }
            // main code
            display(); // calling a function
            echo "end program";
            echo "<br>";
            
            /* jab bhi ham koi function kisi calculation ke purpose ke banate he to waha pr ham us function ko dete he parameter */
            function sum($a,$b){ // prameterized function
                $c = $a + $b;
                echo "sum is: ".$c."<br>";
            }
            sum(10,20);
            sum(100,200);
            sum(1000,2000);


            /* concept of varargs  - means multiple variable argument*/
             function summ(...$a){ // prameterized function
                $c = 0;
                foreach($a as $value){
                    $c = $c + $value;
                }
                echo "sum is: ".$c."<br>";
            }
            summ(10,20);
            summ(100,200,400);
            summ(1000,2000,5000);


            /* jab function koi valur return karta he to ham use return by value bol sakte he  */
            function factorial($n){  // ye function he jisme hamne parameter pass kiya he
                $fact = 1;
                while($n!=0){
                    $fact = $fact * $n;
                    $n--;
                }
                return $fact;  // ye return by value he
            }
            $m = factorial(5); // ye call by value he
            echo "factorial of 5 is: ".$m;
            echo "<br>";


            /* 
            one thing is that ki jab bhi ham function ka use karte he to function kabhi bhi more than one value return nahi kar sakta 

            copy by value and copy by refrance ---
            lets understand this concept by example
            */
            function show($a,$b){ // function with parameter
                $a = $a + 10;
                $b = $b + 20;
            }

            $a = 50;
            $b = 100;
            show($a,$b); // call by value
            echo $a." ".$b."<br>"; // 50 100

            // yaha kya ho raha he jo function me a and b variable he wo function ke variable he and bahar jo and b hai wo local ke variable he
            // iska output ayega 50 100 ab queation ye he ki hamne jo value prvide ki he wo function me change honge but hamare local ko effect nahi karenge
            // lekin agar ham chahte he ki ham jo value pass karne rahe he or wo changes hame orignal variable me hi chahiye to uske liye ham call by value ki jagah concept use karenge call by refrence or copy by refrence 
            function shows(&$a,&$b){ 
                $a = $a + 10;
                $b = $b + 20;
            }

            $a = 50;
            $b = 100;
            shows($a,$b); // call by refrence ya copy by refrence
            echo $a." ".$b

            // ab actually function ke andar ko a or b hai wo local me available a or b ke refrence variable he 
            
            /* function with parameter */
            ?>
    </center>
</body>
</html>