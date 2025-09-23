
<html>
<head>
    <title>operators</title>
</head>
<body>
    <center>
        <marquee>this is php page</marquee>
            <?php 
            // operators to 3 type me devide karte he 
            // unary operator, binary operator, ternary operator
            // unary operatoe - wo operator jo ek hi operand ke sath use hota he for exaple increment operator(++) and decrement operator(--) ~a not a
            // binary operator - wo operator jo do operand ke sath use hota he for example addition(+), subtraction(-), multiplication(*), division(/), modulus(%)
            // ternary operator - wo operator jo 3 operand ke sath use hota he for example (condition ? true : false)
            // 1. arithmetic operator - +, -, *, /, %
                echo 10+20; // 30   
                echo "<br>";
                echo 10-20; // -10
                echo "<br>";    
                echo 10*20; // 200
                echo "<br>";
                echo 10/20; // 0.5  
                echo "<br>";
                echo 10%20; // 10
                echo "<br>";
            // 2. assignment operator - =, +=, -=, *=, /=, %=
                $a = 10; // assignment operator
                echo $a; // 10
                echo "<br>";
                $a += 5; // $a = $a + 5
                echo $a; // 15
                echo "<br>";
                $a -= 3; // $a = $a - 3
                echo $a; // 12
                echo "<br>";
                $a *= 2; // $a = $a * 2
                echo $a; // 24
                echo "<br>";
                $a /= 4; // $a = $a / 4
                echo $a; // 6
                echo "<br>";
                $a %= 4; // $a = $a % 4
                echo $a; // 2
                echo "<br>";    
            // 3. comparison operator - ==, !=, >, <, >=, <=
                $b = 20;
                var_dump($a == $b); // false
                echo "<br>";
                var_dump($a != $b); // true
                echo "<br>";
                var_dump($a > $b); // false
                echo "<br>";
                var_dump($a < $b); // true
                echo "<br>";
                var_dump($a >= $b); // false
                echo "<br>";
                var_dump($a <= $b); // true
                echo "<br>";
            // 4. logical operator - &&, ||, !
                $x = true;
                $y = false;
                var_dump($x && $y); // false
                echo "<br>";
                var_dump($x || $y); // true
                echo "<br>";
                var_dump(!$x); // false
                echo "<br>";
            // 5. string operator - ., .=
                $str1 = "hello";
                $str2 = "world";
                echo $str1 . " " . $str2; // hello world
                echo "<br>";
                $str1 .= " " . $str2; // $str1 = $str1 . " " . $str2
                echo $str1; // hello world
                echo "<br>";
            // 6. array operator - +, ==, !=, ===, !==
                $arr1 = array("a" => "apple", "b" => "banana");
                $arr2 = array("a" => "apple", "b" => "banana", "c" => "cherry");
                $arr3 = array("a" => "apple", "b" => "banana");
                var_dump($arr1 + $arr2); // union of $arr1 and $arr2
                echo "<br>";
                var_dump($arr1 == $arr3); // true
                echo "<br>";
                var_dump($arr1 != $arr2); // true
                echo "<br>";
                var_dump($arr1 === $arr3); // true
                echo "<br>";
                var_dump($arr1 !== $arr2); // true
                echo "<br>";
            // 7. conditional operator - ? :
                $age = 18;
                echo ($age >= 18) ? "adult" : "minor"; // adult
                echo "<br>";
            // 8. bitwise operator - &, |, ^, ~, <<, >>
                $m = 5; // 0101
                $n = 3; // 0011
                echo $m & $n; // 0001 = 1
                echo "<br>";
                echo $m | $n; // 0111 = 7
                echo "<br>";
                echo $m ^ $n; // 0110 = 6
                echo "<br>";
                echo ~$m; // -6 (inverts all bits)
                echo "<br>";
                echo $m << 1; // 1010 = 10 (left shift)
                echo "<br>";
                echo $m >> 1; // 0010 = 2 (right shift)
                echo "<br>";
            // 11. increment/decrement operator - ++, --
                $p = 10;
                echo $p++; // 10 (post-increment)
                echo "<br>";
                echo $p; // 11
                echo "<br>";
                echo ++$p; // 12 (pre-increment)
                echo "<br>";
                echo $p--; // 12 (post-decrement)
                echo "<br>";
                echo $p; // 11
                echo "<br>";
                echo --$p; // 10 (pre-decrement)
                echo "<br>";
            // 12. type operator - instanceof (used to check if an object is an instance of a class)
                class Animal {}
                class Dog extends Animal {}
                $dog = new Dog();
                var_dump($dog instanceof Dog); // true
                echo "<br>";
                var_dump($dog instanceof Animal); // true
                echo "<br>";
                var_dump($dog instanceof stdClass); // false
                echo "<br>";
        ?>
    </center>
</body>
</html>