<?php

if(isset($_GET['str'])) $str=$_GET['str'];

for ($i = strlen($str)-1; $i>=0; $i--) {
       $str .= $str[$i];
       $str[$i] = NULL;
 }
echo $str;

?>