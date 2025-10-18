
<?php

// jo data ham cookie me store karte he wo browser me store hota and jo data ham session me data store karate he wo hota he server per store 
// session secure hota and jyada data store kar sakte he 
// like login pass ya esa data ap store karte he to ap basicaly use karte he session ka lekin agar apko koi none sensitive infoemation store karnni ho like browser konsa he kis time use kiya he ye dare impfoemation ham cookie me store karate 
// jo bhi data ham cookie me store karate he unki speed thori fast hoti he kyoki wo browser me store hota he or session thora slow hota he kyoki wo server me store hota he

echo "<center>";
session_start(); // session start karne ke liye ye function use karte he
$_SESSION['username']="admin"; // session me data store karne ke liye ye syntax use karte he
$_SESSION['password']="12345";
echo "session data store ho gya he";


echo "/<center>";
?>