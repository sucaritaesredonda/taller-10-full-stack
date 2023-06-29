<?php
$result= 0;
$firstNumber= 0;
$secondNumber= 0;
$operation=  "";


if(isset($_POST["first_number"])&& isset($_POST["second_number"]) && isset($_POST["operation"])){
    $firstNumber= floatval ($_POST["first_number"]);
$secondNumber= floatval ($_POST["second_number"]);
$operation=  ($_POST["operation"]);

} 





switch($operation){
    case "A": 
       $result = $firstNumber + $secondNumber ;
    break;
    case "B": 
        $result = $firstNumber - $secondNumber ;
   break;
   case "C": 
    $result = $firstNumber * $secondNumber ;
   break;
   case "D": 
    $result = $firstNumber / $secondNumber ;
   break;
   
  default:
   $message = "elija una opción valida";
  
  
  }




?>