

<?php 
// for include another file data in this page

include("./add_multidimention_data_into_array.php");


// include_once function

for($i=0; $i<10; $i++){
    include_once("./multi_assosicative_array.php");
};

// require("./add_remove_element_array");
for($i=0; $i<10; $i++){
    require_once("./associativearray.php");
}
?>