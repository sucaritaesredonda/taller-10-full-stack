<?php



$message = "";

if(isset($_POST["birth_Date"]) && isset($_POST["name"])){
    
    $userName = $_POST["name"];
    $birthDate = new DateTime ($_POST["birth_Date"]);
$today = new DateTime();

$newDate = $birthDate->diff($today);

$newDate->days;

if($newDate->days>= 6570){
    $message =  $userName . " ".  "es mayor de edad";
    
    }
    
    if($newDate->days < 6570){
        $message =  $userName . " ". "no es mayor de edad";
        }


}



?>