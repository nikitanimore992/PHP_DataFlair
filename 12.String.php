
<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is string page</marquee>
            <?php 
            // string functions

            // strlen() function
            $str = "Hello World";
            echo $str."<br>";
            echo "string length is : ".strlen($str)."<br>"; 
            // string ki length caluculate karne ke liye php me ham log strlen() function ka use karte hai

            // str_word_count() function
            $mystr = "hello this is nikita Nimore";
            $n = str_word_count($mystr);
            echo $mystr."<br>";
            echo "total words is: ".$n."<br>";
            // string me kitne word hai ye count karne ke liye php me ham log str_word_count() function ka use karte hai
           
            ?>
    </center>
</body>
</html>