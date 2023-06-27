<?php
const CONECTION = new mysqli("localhost", "root", "", "mi_proyecto");
$query = mysqli_query(CONECTION, "SELECT * FROM usuarios");

print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>