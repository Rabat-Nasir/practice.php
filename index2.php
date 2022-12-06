<html>
    <?php
$limit = 100;
	$init = 2;
	
	while(TRUE)
	{
		$div = 2;
		if($init > $limit) 
		{
			break;
		}
		while(TRUE)
		{
			if($div > sqrt($init))
			{
				echo $init."  ";
				break;
			}
			if($init % $div == 0) 
			{
				break;
			}
			$div = $div + 1;
		}
		$init = $init + 1;
	}

// Generate an array of numbers from 1 to 100
$numbers = range(1,100);

// Random shuffle the array
shuffle($numbers);

// Take first 30 values out of the array (it will be random and distinct)
$random_30 = array_slice($numbers, 0, 30);




?>

</html>