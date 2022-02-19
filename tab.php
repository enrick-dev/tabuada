<?php

$num_tab = $_GET["num_tab"];
$quant_num = $_GET["quant_num"];

$quant_num_array = array();
$result = 0;

for ($i1 = 0;$i1 <= $quant_num;$i1++) {
    $quant_num_array[] = $i1;
    $result = $num_tab * $quant_num_array[$i1];
    echo $num_tab . "x" . $i1 . "=" . $result. "<br>"; 
}
?>