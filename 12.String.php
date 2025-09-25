
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
           
            // chunk_split() function
            $mystring = "Hello this is nikita nimore";
            $newstr = chunk_split($mystring,3," Ankit ");
            echo "my new string is ====> ".$newstr."<br>";
            // man lijiye apko apne string me kuch new add krna he and another new string banana he then you can go for chunk_split() function 
            // and this is immutable String  means not allow to chane themself for example jese hamne prev. me kiya the agar ham without new string create kiye bina hi direct actual string me change karna chahe to wo change nahi karega just beacause string is immutable string khud me change nahi karega until unless ap agar new string create karte hai to wo changes apko us string me reflect honge.
            $mystringg = "Hello this is nikita nimore";
            chunk_split($mystringg,3,".");
            echo $mystringg."<br>"; // yaha par kuch bhi change nahi hoga beacause string is immutable.

        // str_split() function
            $string = "Hellothisisnikitanimore";
            echo $string."<br>";
            $arr = str_split($string,3);
            print_r($arr);
            echo "<br>";
        // jab bhi hame kisi string ko split karke array me convert karna he then we can go for str_split() function

       

            ?>
    </center>
</body>
</html>