<?php
	$myfile = fopen("input1.txt", "r") or die("Unable to open file!");

	$operator = array();
	$number = array();

	while(!feof($myfile)) {
		$line = fgets($myfile);
		$opepos = strpos($line, " ");
		$opstring = substr($line, 0,$opepos);
		$opnumber = substr($line, $opepos,strlen($line));
		if($opstring != ""){
			array_push($operator, $opstring);
			array_push($number,$opnumber);	
		}
	  	
	}
	fclose($myfile);

	$problem = "";
	for ($i=0; $i < count($operator); $i++) { 
		$problem .= $operator[$i].":".$number[$i]."<br>";
	}

	$total = intval($number[0]);
	for ($i=0; $i < count($operator); $i++) { 
		if($i != count($operator) - 1)
			$num = intval($number[$i + 1]);
		switch ($operator[$i]) {
			case 'add':
				$total += $num;
				break;
			case 'multiply':
				$total *= $num;
				break;
			case 'subtract':
				$total -= $num;
				break;
			case 'divide':
				$total /= $num;
				break;
			case 'apply':
				$total = $total;
				break;
			default:
				# code...
				break;
		}
	}
?>

