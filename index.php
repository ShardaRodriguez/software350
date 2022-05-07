<!DOCTYPE html>
<?php
include('database.php');
include('tables.php');

?>

<html><title>MAIN PAGE</title>
<style>
input[type= "submit"]{

  padding: 15px 80px;
  color: white;
  font-size: 25px;
  text-align: center;
  background-color: red;
}

.buttonBar{
  width: 300px;
  height: 300px;

}

</style>
<body>

<h1><center>MAIN PAGE</center></h1>
<br>

<center>
<div class = "buttonBar">

   <form action="login.php">
      <input type="submit" value="JUDGE LOGIN                                  " />
   </form>

   <form action="admLogin.php">
     <input type="submit" value="ADMINISTRATOR LOGIN                  " />
   </form>

   <form action="">
     <input type="submit" value="CREATE NEW JUDGE ACCOUNT" />
   </form>

   <form action="">
     <input type="submit" value="CREATE NEW ADMINISTRATOR" />
   </form>

</div>
<center>

</body>
</html>
