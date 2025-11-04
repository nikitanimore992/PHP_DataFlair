<?php
// date 
echo date("d")."<br>";
echo date("D")."<br>";
echo date("d-m")."<br>";
echo date("d-M")."<br>";
echo date("d-m-y")."<br>";
echo date("d-m-Y")."<br>";
echo date("D-M-Y")."<br>";

// time 
echo date("h")."<br>";
echo date_default_timezone_get();
date_default_timezone_set("Asia/Kolkata");
echo "<br>";
echo date("h")."<br>";
echo date("h:i")."<br>";
echo date("h:i:s")."<br>";
echo date("H:i:s")."<br>";


?>