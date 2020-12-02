<?php	
	$arr1=explode(' ',readline());
	$ser=$arr1[0];
	$arr2=explode(' ',readline());
	for ($x = 0; $x < 5; $x++) {
	  if ($arr2[$x] < 50){
		  $ser = floor($ser/2);
	  }
	  else{
		  $ser = ($ser *2) + 1;
	  }
	}
	echo($ser);
?>