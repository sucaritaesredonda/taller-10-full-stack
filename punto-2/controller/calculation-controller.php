<?php

$age = 0;
$name = "";
$message = "";

if(isset($_POST["age"]) && isset($_POST["name"]))
{
 $age = intval($_POST ["age"]);
$name = $_POST ["name"];

}


if($age >= 18){
$message = $name . "Es mayor de edad";

}

if($age < 18){
    $message = $name . "No es mayor de edad";
    }

?>