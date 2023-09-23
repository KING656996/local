<?php

$myfile = fopen("location.txt", "w");
$infromation = "lat :" . $_GET["lat"] . "lon :" . $_GET["lon"];
fwrite($myfile , $infromation);
fclose($myfile);
?>