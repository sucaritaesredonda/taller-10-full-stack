<?php

include "./model/user.php";
include "./service/UserDAO.php";

function getUsers(){
    $usersQuery = getAllUsers();
    $users = array ();

    while($row = mysqli_fetch_assoc($usersQuery)){
        
        $user = new User(
            $row["id"],
            $row["nombre"],
            $row["apellido"],
            $row["cedula"],
            
        );
        $userList[] = $user;
    }
    return $userList;
}


?>