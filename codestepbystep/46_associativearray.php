
<html><head><title>php</title></head>


<body>
<center>
    <?php
    $users=["anil","sam","peter","bruce","tony","johan","jamson"];
    echo $users[0]."<br>";
    // index array 

    $userdetails=[
        "name"=>"Nikita",
        "age"=>"24",
        "city"=>"Bhopal",
        "email"=>"nikitanimore992@gmail",
        "state"=>"madhyapradesh"
    ];
    echo $userdetails["name"];
    echo "<br>";
    echo $userdetails["age"];
    echo "<br>";
    echo $userdetails["city"];
    echo "<br>";
    echo $userdetails["email"];
    echo "<br>";
    echo $userdetails["state"];
    echo "<br>";

    // another way like using for each loop
    foreach($userdetails as $data){
        echo $data;
        echo "<br>";
        // echo $key;
        // echo "<br>";
    }
    foreach($userdetails as $key=>$data){
        echo $key." is = ".$data;
        echo "<br>";
    }
   ?> 


</center>
</body>
</html>