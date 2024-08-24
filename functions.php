<?php
$nameErr="" ;
$name ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Hello World";
    } }
?>
