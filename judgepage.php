<!DOCTYPE html>
<html>
<head>
<style>
table,td,input[type="button"],input[type="text"]{border:solid black 2px;font-size:small;}
.division{border:solid black 2px;background-color:#CCCCCC;margin:2px;padding:1px;font-size:small;}
th{text-align:center;background:black; color:white;padding:4px;}
div.v0{ width:100%;}
div.v1{ width:50%; margin:0px auto; background-color:#EEEEEE;}
p{margin-left: "1cm";}
</style>
<title>ComputerScienceProject</title>
</head>
<body>


    <form method="post" action="">

      <div class="v0"><div class="v1">
        <div class="division" style="font-size:1.5em;text-align:center;background:#CCCCCC; color:black;">COMPUTER SCIENCE PROJECT</div>

        <div class="division">
          Group Members: <input type="text" size="20" />
          Group Number:  <input type="text" size="20" name= "groupN" id="groupN" /><br>
          Project Title: <input type="text" size="20" margin-left="1cm"  />
        </div>

        <div class="division">
          <p><b>Criteria<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                Developing(0-10)<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                Accomplished(10-15)</b></p>
        </div>

        <div class="division">
    		  <b>Articulate requirements</b>
    		  <input type="text" size="20" name="aRD" id="aRD" />
    		  <input type="text" size="20" name="aRA" id="aRA" />
    	  </div>

    	  <div class="division">
    	   	<b>Choose appropiate tools and methods for each task</b>
    	  	<input type="text" size="20" name="cATD" id="cATD"/>
    	  	<input type="text" size="20" name="cATA" id="cATA"/>
    	  </div>

        <div class="division">
          <b>Give clear and coherent oral presentation</b>
          <input type="text" size="20" name="ccpD" id="ccpD"/>
          <input type="text" size="20" name="ccpA" id="ccpA"/>
        </div>

        <div class="division">
          <b>Functioned well as a team</b>
          <input type="text" size="20" name="fwtD" id="fwtD"/>
          <input type="text" size="20" name="fwtA" id="fwtA"/>
        </div>

        <div class="division">
        	 <b>Total</b>
        	 <input type="text" size="20" name="tot" id="tot"/>
        </div>

      	<div class="division">
      		<b>Judge's name:</b>
      		<input  type="text" size="20" name="jname" id="jname"/>
      		<input type="submit" name="submitted" id="submitted" value="SUBMIT" /></p>
      	</div>

    </form>

</body>
</html>

<?php

if(isset($_POST['submitted'])){


  $n1 = (int)$_POST['groupN'];
  $n2 = (int)$_POST['aRD'];
  $n3 = (int)$_POST['aRA'];
  $n4 = (int)$_POST['cATD'];
  $n5 = (int)$_POST['cATA'];
  $n6 = (int)$_POST['ccpD'];
  $n7 = (int)$_POST['ccpA'];
  $n8 = (int)$_POST['fwtD'];
  $n9 = (int)$_POST['fwtA'];
  $jud = $_POST['jname'];
  $tol = $n2 + $n3 + $n4+ $n5+ $n6+ $n7 + $n8 +$n9;

  $servername = "localhost";
  $username =   "sharda";
  $password =   "220895";
  $dbname= "myDATABASE";


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error)
  {
    die("Connection failed:" . $conn->connect_error);
  }


  $inse = "INSERT INTO DEVELOPINGACCOM(groupNumber, jugdeUsername, artRequirement_D, appropiateTM_D, presentation_D, functionedWT_D, artRequirement_A, appropiateTM_A, presentation_A, functionedWT_A, total)
          VALUES($n1, $jud, $n2, $n4, $n6, $n8, $n3, $n5, $n7, $n9, $tol)";


  if($conn->query($inse)==TRUE)
  {
       echo '<script>alert("Successfully")</script>';
  }
  else {
     echo "Sharda Login<br>";
  }

}


$conn->close();

?>
