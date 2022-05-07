<?php

       //echo "Todo lo puedo con Jehova Dios<br>";

       $servername = "localhost";
       $username =   "sharda";
       $password =   "220895";
       $dbname= "myDATABASE";


       $conn = new mysqli($servername, $username, $password, $dbname);

       if ($conn->connect_error)
       {
         die("Connection failed:" . $conn->connect_error);
       }

      $sqlA = "CREATE TABLE IF NOT EXISTS ADMINISTRATOR(
              username varchar(40) PRIMARY KEY,
              firstname VARCHAR(20) NOT NULL,
              lastname  VARCHAR(20) NOT NULL,
              email VARCHAR(40))";


      if($conn->query($sqlA)==FALSE)
      {
         echo "Error creating table ADMINISTRATOR";
      }


      $sqlJ = "CREATE TABLE IF NOT EXISTS JUDGES(
              username varchar(40) PRIMARY KEY,
              firstname VARCHAR(20) NOT NULL,
              lastname  VARCHAR(20) NOT NULL,
              email VARCHAR(40))";


       if($conn->query($sqlJ)==FALSE)
       {
         echo "Error creating table Judge";
       }


       $sqlAL = "CREATE TABLE IF NOT EXISTS ADMLogin(
                username varchar(40) NOT NULL PRIMARY KEY,
                password varchar(40) NOT NULL

       )";

       if($conn->query($sqlAL)==FALSE)
       {
         echo "Error creating table ADMINISTRATOR LOGIN";
       }

       $sqlJL = "CREATE TABLE IF NOT EXISTS JUDGELogin(
                username varchar(40) NOT NULL PRIMARY KEY,
                password varchar(40) NOT NULL

       )";

       if($conn->query($sqlJL)==FALSE)
       {
         echo "Error creating table JUDGE LOGIN";
       }

       // Group Table
       $sqlg = "CREATE TABLE IF NOT EXISTS groupINF(
                       groupNumber INT PRIMARY KEY,
                       average FLOAT,
                       projectTitle VARCHAR(50),
                       members VARCHAR(100)
                 )";

       if($conn->query($sqlg)==FALSE)
       {
           echo "Error creating table Group<br>";
       }

       $sqlDevA = "CREATE TABLE IF NOT EXISTS DEVELOPINGACCOM(
                groupNumber INT,
                jugdeUsername VARCHAR(40),
                artRequirement_D INT,
                appropiateTM_D INT,
                presentation_D INT,
                functionedWT_D INT,
                artRequirement_A INT,
                appropiateTM_A INT,
                presentation_A INT,
                functionedWT_A INT,
                total INT,
                primary key (groupNumber, jugdeUsername)

       )";

       if($conn->query($sqlDevA)==FALSE)
       {
         echo "Error creating table DEVELOPEMENt<br>";
       }

      /* $insert = "INSERT INTO JUDGES(username, firstname, lastname, email)
                 VALUES('DoeJ123', 'John', 'Doe', 'jd123@phpworld.com')";

       if($conn->query($insert)==TRUE)
       {
            echo "Joe Doe<br>";
       }
       else {
         echo "No funciono<br>";
       }

       $ins = "INSERT INTO JUDGELogin(username, password)
                 VALUES('johnDoe1', '110895')";

       if($conn->query($ins)==TRUE)
       {
            echo "Joe Doe Login<br>";
       }

       $ins = "INSERT INTO ADMLogin(username, password)
                 VALUES('shardaR', '220895')";

       if($conn->query($ins)==TRUE)
       {
            echo "Sharda Login<br>";
       }*/



       mysqli_close($conn);

?>
