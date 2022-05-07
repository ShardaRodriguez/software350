<?php

       //echo "Todo lo puedo con Jehova Dios<br>";

       $servername = "localhost";
       $username =   "sharda";
       $password =   "220895";

       //echo $servername.$username.$password."<br>";

       $conn = mysqli_connect($servername, $username, $password);

       if (!$conn)
       {
         die("Connection failed:" . mysqli_connect_error());
       }
       //echo "Connected successfully<br>";

      // echo "<br> Jehova ensename el camino por favor<br>";



       //echo "Successfully close<br>";

?>
