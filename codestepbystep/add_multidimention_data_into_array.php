<!DOCTYPE html>
<html lang="en">
<head>
 <title>php</title>
</head>
<body>
  <center>
    <!-- <table border=1>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>City</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Nikita</td>
            <td>Bhopal</td>
            <td>nikitanimore@gmail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Neeraj</td>
            <td>harda</td>
            <td>NeerajRathore@gmail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Neha</td>
            <td>Indore</td>
            <td>nehanimore@gmail.com</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Yogita</td>
            <td>Indrapuri</td>
            <td>Yogitanimore@gmail.com</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Saloni</td>
            <td>Bangloru</td>
            <td>salonibanloru@gmail.com</td>
        </tr>
    </table> -->

  <?php 
  $users=[
    [1,"Nikita","Bhopal","nikitanimore@gmail.com"],
    [2,"Neeraj","Harda","neerajrathore@gmail.com"],
    [3,"Anil","Noida","aniljokhare@gmail.com"],
    [4,"Neha","Indore","nehanimore@gmail.com"],
    [5,"Aman","Indore","amannimore@gmail.com"]
  ];
  
    echo "<table border=1>";
    echo "<tr>
            <th>S.No</th>
            <th>Name</th>
            <th>City</th>
            <th>Email</th>
        </tr>";

  for($i=0; $i<count($users); $i++){
    // print_r($array[$i]);
    echo "<tr>";
    for($j=0;$j<count($users[$j]);$j++){
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
        }
    echo "</tr>";
    }
    echo " </table>";
  ?>
  </center>  
</body>
</html>