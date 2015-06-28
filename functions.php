<?php
	
	// Getting values of names...
		$n1 = $_POST['name1'];
		$n2 = $_POST['name2'];
	// Getting string lengths...
		$l1 = strlen($n1);
		$l2 = strlen($n2); 
	// Getting lower case letters...
		$lname1 = strtolower($n1);
		$lname2 = strtolower($n2);
		// result words...
		$key[0]= "Friends";
		$key[1]= "Lovers";
		$key[2]= "Anger";
		$key[3]= "Married";
		$key[4]= "Engaged";
		$key[5]= "Sweethearts";	
		// Splitting strings...
		$s1 = str_split($lname1);
		$s2 = str_split($lname2);
		$s1_up = str_split($n1);
		$s2_up = str_split($n2);
			// result error handling...
				$key[6] = "You have entered the same name.";
				$key[7] = "No letters are matched. Try another combination.";
				$key[8] = "Only one or no name has been entered.";
				$key[9] = "You haven't entered any name.";
				

$side = side ($lname1, $lname2, $l1, $l2);
$main = main ($lname1, $lname2, $l1, $l2, $side);

		
	function main($lname1, $lname2, $l1, $l2, $side)
	{
				if ($l1!=0&&$l2!=0)
		{
			if ($lname1==$lname2)
				return 6; // Returning Error...
					else 
				return $side;
					
		}
			else
		{
			if ($lname1==0||$lname2==0)
			return 8; // Returning missing value(s) error...
		}
	}

	function side ($lname1, $lname2, $l1, $l2)
		{/* Start of Side function */

	// Spliting string to an array...
						$s1 = str_split($lname1);
						$s2 = str_split($lname2);
		$a=0; $b=0;
	// Surveying first name...
		for ($x=0; $x<$l1; $x++)
				{
					if ($s1[$x]!=" ")
					{
						for ($y=0; $y<$l2; $y++)
						{
						if ($s1[$x]==$s2[$y])
							{$a++; break;}
						}
					}
				}
	// Surveying Second name;
		for ($y=0; $y<$l2; $y++)
				{
					if ($s2[$y]!=" ")
					{
						for ($x=0; $x<$l1; $x++)
						{
							if ($s2[$y]==$s1[$x])
								{$b++; break;}
						}
					}
				}
		//	Surveying final answer...
			$result = $a+$b;
				if ($result!=0)
					{
						$final_result = ($result%6)-1;
						if ($final_result<0)
							return 5;
						else
							return $final_result;
					}
				else
					{
						return 7;
					}
		/* End of Side function */
}
/////////
$file = fopen("count.txt","a");
fwrite($file, $main);
fclose($file);
///////////////////////////////////
?>