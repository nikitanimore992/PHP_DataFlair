
<?php 
 

  $a = 5;
  var_dump($a);
  $a = (String) $a;
  var_dump($a);
  echo "<br>";

  $a = 5;
  var_dump($a);
  $a = (bool) $a;
  var_dump($a);
  echo "<br>";

  $a = true;
  var_dump($a);
  $a = (int) $a;
  var_dump($a);

  echo "<br>";
  $a = "300";
  var_dump($a);
  $a = (int) $a;
  var_dump($a);

  echo "<br>";
  $a = 0;
  var_dump($a);
  $a = (bool) $a;
  var_dump($a);

  echo "<br>";
  $a = 5;
  var_dump($a);
  $a = (array) $a;
  var_dump($a);

  echo "<br>";
  $a = ["10"];
  var_dump($a);
  $a = (string) $a;
  var_dump($a); // array to string conversion is not possible  directly

  echo "<br>";
  $a = "Nikita";
  var_dump($a);
  $a = (array) $a;
  var_dump($a);
?>