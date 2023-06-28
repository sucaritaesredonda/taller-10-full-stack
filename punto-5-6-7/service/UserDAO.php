<?php
include "conection.php";

function getAllUsers(){
   return mysqli_query(CONECTION, "SELECT * FROM usuarios");
}

function getUserByIdNumber($idNumber){
    return mysqli_query(CONECTION, "SELECT * FROM usuarios WHERE cedula = $idNumber");
}


// print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>