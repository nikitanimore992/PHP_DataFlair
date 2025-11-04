
<html><head><title>php</title></head>


<body>
<center>
    <?php
    $userName= ["Nikita","Neha","Yogita","Aman","Ajay"];

    // add new element 
        array_push($userName,"pramod"); // add single element
        print_r ($userName);
        echo "<br>";
        array_push($userName,"Neeraj","Mahi"); // Add Multiple elements
        print_r ($userName);
        echo "<br>";

    // remove exiting element

        array_pop($userName); // for single element
        print_r ($userName);
        echo "<br>";
        array_splice($userName,-2); // for multiple element
        print_r ($userName);
        echo "<br>";
   ?> 
</center>
</body>
</html>