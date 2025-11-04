<?php
// convert array to json 
$user = ["Name"=>"Nikita","Age"=>24,"Email"=>"nikitanimore@gmail.com"];
print_r ($user);
$userJson= json_encode($user);
echo $userJson;

// conver json data to array
$data='{"Name":"Neha","Age":23,"Email":"nehanimore@gmail.com"}';
echo $data;
echo "<br>";
$dataArray = json_decode($data);
print_r ($dataArray);
echo "<br>";
$datasArray = json_decode($data,true);
print_r ($datasArray);

?>