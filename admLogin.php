<<!DOCTYPE>

<html><title>LOGIN</title>
<style>
h2{color: black; font-size: 25px;}
input[type= "text"]{border:solid black 1px; margin-left: 1cm; width: 220px; height: 25px;}
input[type= "submit"]{padding: 10px 50px;color: white; font-size: 20px; text-align: center; background-color: red; margin-left:2cm}
a{color: black; margin-top: 3cm;}
.div1{width: 500px; height: 300px; border: solid black 0.5px;}
.p1{color: black; font-size: 20px;}
.p2{padding-top: 15px}
</style>

<body>

<br><br><br><br>

<center>
  <div class = "div1">
  <h2>ADMINISTRATOR LOGIN</h2>
  <br>
  <form method="post" action="">
    <p class="p1"><span>Username</span><input  type="text" id="txt_uname" name="txt_uname"  value="" /></p>
    <p class="p1"><span>Password</span><input  type="text" id="txt_pwd" name="txt_pwd" value="" /></p>
    <p style="p2"><span>&nbsp;</span> <input type="submit" name="submitted" id="submitted" value="SUBMIT" /></p>

  </form>
  </div>
</center>

</body>
</html>

<?php

session_start();
$servername = "localhost";
$username =   "sharda";
$password =   "220895";
$dbname= "myDATABASE";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
  die("Connection failed:" . $conn->connect_error);
}


if(isset($_POST['submitted'])){
    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){
        $sql_query = "select count(*) as cnt from ADMLogin where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cnt'];

        if($count > 0){
            //$_SESSION['uname'] = $uname;
            //header('Location: JudgePage.php');
        }else{

            echo '<script>alert("Invalid username or password")</script>';
        }

    }

}

$conn->close();

?>
