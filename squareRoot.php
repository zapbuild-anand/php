<html>
<head>
	<title>Square root</title>
</head>
<body>
	<form method="post">
		Enter a numbee : <input type="text" name="number"/>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$number=intval($_POST['number']);
	$t=$number;
	$r=0;
	$arr=array();
	$i=0;
	$j=0;
	$k=0;
	while($t!=0)
	{
		$r=$t%100;
		$arr[$i++]=$r;
		$t=floor($t/100);
	}
	$arr=array_reverse($arr);
	$l=count($arr);
	//print_r($arr);
	$div=0;
	$rem=0;
	$did=0;
	$res=array();
	for($i=0;$i<$l;$i++)
	{
		$did=$rem*100+$arr[$i];
		if($arr[$i]==1)
		{
				$res[$k]=1;
				$div=2;
		}
		if($arr[$i]==0)
		{
			$res[$k]=0;

		}
		else
		{
			for($j=1;$j<=9;$j++)
			{
				if((($div*10+$j)*$j)<=$did)
				{
					$res[$k]=$j;
				}
			}
			if(($div*10+$res[$k])*$res[$k]<$did)
			{
				$rem=$did-(($div*10+$res[$k])*$res[$k]);
			}
			else
				$rem=0;
		}		
		if($i==0)
		{
			$div=2*$res[$k];
		}
		else
		{
			$div=$div*10+2*$res[$k];
		}
		$k++;
	}
	if($rem>0)
	{
		$res[$k]=".";
		$res[++$k]=0;
	
		for($i=0;$i<20;$i++)
		{
			$did=$rem*100;
				for($j=1;$j<=9;$j++)
				{
					if((($div*10+$j)*$j)<=$did)
					{
						$res[$k]=$j;
						//echo " $j ";
					}
				}
				//echo " $res[$i] ";
				if(($div*10+$res[$k])*$res[$k]<$did)
				{
					$rem=$did-(($div*10+$res[$k])*$res[$k]);
				}		
			$div=$div*10+2*$res[$k];
			$k++;
		}
	}
	//print_r($res);
	echo "Square root of $number is ";
	foreach($res as $x)
	{
		echo "$x";
	}
}
?>