

<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is php varargs function page</marquee>
            <?php 
            // concept of varargs - means variable arguments for example 
            function sum(...$a)//parameter ab ap jitne parameter chah de sakte ho
            {
                foreach($a as $m){
                    echo $m; // by defalut ye kya karega vales ko cancatinate kar dega 
                }
            }
            sum(1,2,3,4,5);
            echo "<br>";
            sum(100,200);
            echo "<br>";

            // agar apko addition karna hai to
            function add(...$a)//parameter ab ap jitne parameter chah de sakte ho
            {
                $addition = 0;
                foreach($a as $m){
                 // ye kya karega vales ko addtion  kar dega 
                    $addition = $addition + $m;
                    echo "sum is".$addition;
                }
            }
            add(1,2,3,4,5);
            echo "<br>";
            add(100,200);
            echo "<br>";
            // ye function me one by addtion karega and har baar jo addtion he print karega for example hamne use kiya tha add(1,2,3,4,5); to ye kya karega ki pahle 1 se 2  ka additon karega use print karega fir jo result aye usse thirt argument ko add karega jo ki hamare pass 3 tha meand our aresult is 3 and argument is 3 meand next is will print 6 and uske baad next arugument is result+next argument 6+4=10 and print 10 and last me 10+5=15 and print 15 jab tak ki argument end nahi ho jata ye function call hota hi rahega 

            
            ?>
            
    </center>
</body>
</html>