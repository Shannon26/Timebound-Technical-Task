<?php	
	$arr1=explode(' ',readline());
	$b=$arr1[0];
	$v=$arr1[1];
	$s=$arr1[2];
	$arr2=explode(' ',readline());
	$vp=$arr2[0];
	$sp=$arr2[1];
	$C=0;
	if ($sp>$vp)
	{	$hp=$sp;			
		$lp=$vp;			
		$h=$s;$l=$v;
	}
	else
	{	$hp=$vp;			
		$lp=$sp;			
		$h=$v;$l=$s;
	}
	if ($b>=2*$h)
	{	$C+=$h*$hp;
	}
	else
	{	$C+=$hp*(int)($b/2);
		echo $C;
	}
	$b=$b-2*$h;
	if ($b>=2*$l)
	{	$C+=$l*$lp;
		echo $C;
	}
	else
	{	$C+=$lp*(int)($b/2);
		echo $C;
	}
	
?>