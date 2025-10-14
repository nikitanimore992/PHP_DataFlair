<?php 

$array = [
    [1,"Nikita","Bhopal"],
    [2,"Neeraj","Harda"],
    [3,"Anil","Noida"],
    [4,"Neha","Indore"]
];
echo "<pre>";
print_r($array);
echo "<pre>";

for($i=0; $i<count($array); $i++){
    // print_r($array[$i]);
    for($j=0;$j<count($array[$j]);$j++){
        echo $array[$i][$j];
        echo " ";
 }
    echo "<br>";
}
?>