<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Problem Statement 1</title>
  <meta name="Shannon" content="">
</head>

<body>


	<form action="problem 1.php" method="post">
		Enter No. Of Server: <input type="number" name="server" min="1" max="100"><br>
		Enter 5 loads in below input: <br>
		<input type="number" name="load1" min="1" max="100"><br>
		<input type="number" name="load2" min="1" max="100"><br>
		<input type="number" name="load3" min="1" max="100"><br>
		<input type="number" name="load4" min="1" max="100"><br>
		<input type="number" name="load5" min="1" max="100"><br>
		<input type="submit">
	</form>
  
  
  <?php 
	$server = $_POST["server"];
	$server1 = $_POST["server"];	
	$load1 = $_POST["load1"]; 
	$load2 = $_POST["load2"];
	$load3 = $_POST["load3"];
	$load4 = $_POST["load4"];
	$load5 = $_POST["load5"];
	
	$arr1 = array($load1, $load2, $load3, $load4, $load5);
	
	for ($x = 0; $x < 5; $x++) {
	  if ($arr1[$x] < 50){
		  $server = floor($server/2);
	  }
	  else{
		  $server = ($server *2) + 1;
	  }
	}
	
	if ($server <= $server1){
		echo $server;
	}
	else{
		echo $server1;
	}
	
  ?>
</body>

</html>