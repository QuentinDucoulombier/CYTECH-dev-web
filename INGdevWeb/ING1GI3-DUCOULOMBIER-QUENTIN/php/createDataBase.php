<?php

$serveur = "localhost";
$user = "quentin";
$pass = "*noeDu64*";
$cnx = mysqli_connect($serveur,$user,$pass);

if(mysqli_connect_errno($cnx))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}



?>