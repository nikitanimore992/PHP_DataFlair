<?php 
// local variable 

function getName(){
    $name="anil";
    echo $name; // agar me ise function le bahr print karna chahu to nahi hoga kyuki ye variable only is function ke andar declare kiya gaya he 
}
getName();
echo "<br>";

// globle varibale
$email = "nikitanimore992@gmail.com";
function getemail(){
    global $email;
    echo "var is : $email";

}
echo $email;
echo "<br>";
getemail();
echo "<br>";


$age = 27;
function getAge($age){
    echo $age;

}
echo $age;
echo "<br>";
getAge($age);
echo "<br>";

$city = "Bhopal";
function getCity(){
    global $city;
    $city = "Noida";
    echo $city;
}
echo $city; // first if you want to print value the value is Bhopal
echo "<br>";
getCity(); // function call 
echo "<br>";
echo $city; //  after calling the functio value will we Noida 
echo "<br>";

$name = "Nikkta";
function test(){
    $name= "Yogita";
    echo $name;

    function innertest(){
        $name = "Neha";
        echo $name;
    }
}

test();
echo "<br>";
innertest();
echo "<br>";
echo $name;
echo "<br>";
?>