<?php

include('connect.php');

//Creation of database called myDataBase

$sql = "CREATE DATABASE IF NOT EXISTS myDATABASE";

if(mysqli_query($conn, $sql) == FALSE)
{
   echo "Error creating database: <br>";
}


mysqli_close($conn);

//echo "Gracias Dios<br>"

?>
