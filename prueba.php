<?php

$servername = "localhost";
$username =   "sharda";
$password =   "220895";
$dbname= "myDATABASE";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
  die("Connection failed:" . $conn->connect_error);
}

$view = "SELECT judgeUsername FROM DEVELOPINGACCOM";
$result = $conn->query($view);

if($result->num_rows> 0 )
{
   while($row = $result->fetch_assoc()){
      echo "<br> Username:".$row["judgeUsername"]."<br>";
   }
}
else{
  echo "<br> 0 results <br>";
}


$conn->close();


?>
