<?php
$users = ["Nikita","Yogita","Neha","Pramod","Anuradha","Mahesh"];
$users1 = ["Nikita","Yogita","Neha","Pramod","Anuradha","Mahesh"];
$user="Hello! Nikita Nimore";
// if you want chack this array or not 
    echo is_array($users);
    echo "<br>";
    if(is_array($user)){
        echo "this is aaray";
    }else{
        echo "this is not array";
    };
     echo "<br>";

// if you want to check how many element are available in this array 
    echo count($users);
    echo "<br>";

// if you want to remove any particular index element in array 
    unset($users[2]);
    print_r ($users);
    echo "<br>";

// if you want to push data from array then
    array_push($users,"Ankit","Ajay");
    print_r($users);
    echo "<br>";

// if you want to pop element from array
    Array_pop($users);
    print_r($users);
    echo "<br>";

// if you want to convert array into string then  
    echo implode($users);
    echo "<br>";

// if you want to convert string in array then
    print_r(explode(" ",$user));
    echo "<br>";
    echo "<br>";

// if you want to merge array in one array 
    $data = array_merge($users,$users1);
    print_r($data);
    echo "<br>";
    echo "<br>";

// if you want to  remove duplicate elements in your array 
    $data = array_unique($data);
    print_r($data);
    echo "<br>";
?>