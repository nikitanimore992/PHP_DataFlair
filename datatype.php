
<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is php page</marquee>
            <?php 
        //   datatype in php-  int,float,string,boolean,array,object,null
            $a =120; // integer
            echo $a."<br>";
            $b = 23.36;// float 
             echo $b."<br>";
            $c = "hello world"; // string
             echo $c."<br>";
            $d = TRUE; // boolean
             echo $d."<br>";
            $e = array("html","css","js","php"); // array
            print_r($e);
            class student{  // object
                function name(){
                    return "this is student class";
                }
            }
           ?>
    </center>
</body>
</html>