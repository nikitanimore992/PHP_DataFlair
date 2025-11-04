
<html><head><title>php</title></head>


<body>
<center>
    <?php
    $users=[
        ["name"=>"nikita nimore","age"=>"24","city"=>"bhopa","email"=>"nikitanimore@gmail.com"],
        ["name"=>"neha nimore","age"=>"23","city"=>"indore","email"=>"nehanimore@gmail.com"],
        ["name"=>"Yogita nimore","age"=>"21","city"=>"bhopal","email"=>"yogitanimore@gmail.com"],
        ["name"=>"saloni patel","age"=>"23","city"=>"bangloru","email"=>"salonipatel@gmail.com"]
    ];
    // print_r ($users);

    echo "<table border=1>";
    echo "<tr>
            <th>Name</th>
            <th>age</th>
            <th>City</th>
            <th>Email</th>
        </tr>";
    foreach($users as $user){
        echo "<tr>";
        foreach($user as $item){
            echo "<td>";
            echo $item;
            echo "</td>";
        }
         echo "</tr>";
    }
    echo "</table>";
   ?> 
</center>
</body>
</html>