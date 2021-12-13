<?php
function calculator(int $numberFirst, int $numberSecond, string $action):void
{

	switch ($action) {
	case '+':
		echo $numberFirst + $numberSecond;
		break;
	case '-':
		echo $numberFirst - $numberSecond;
		break;
	case '/':
		echo $numberFirst / $numberSecond;
		break;
	case '*':
		echo $numberFirst * $numberSecond;
		break;
	default:
		echo "ошибка ввода...";
	}
}
function searchNumber(int $number, array $numbers):bool
{
	$result = false;
	foreach ($numbers as $numberArray)
	{
		if($number === $numberArray)
		{
			$result = true;
			break;
		}
	}
	return $result;
}
function searchNotPairedNumber(array $numbers):int
{
	$result = 0;
	$counts = array_count_values($numbers);
	foreach ($counts as $index => $count)
	{
		if($count === 1)
		{
			$result = $index;
		}
	}
	return $result;
}

function formatSymbol(string $string, int $k):string
{
	$k--;
	$newArray = [];
	$arrayString = explode(' ', $string);
	foreach ($arrayString as $word)
	{
		if(strlen($word) <= $k)
		{
			$newArray[] = $word;
			continue;
		}
		$arrayWord = str_split($word);
		$arrayWord[$k] = '#';
		$newArray[]= implode('', $arrayWord);
	}
	return implode(' ', $newArray);
}
function checkString(string $firstString, string $secondString)
{

	$arrayWord1 = str_split($firstString);
	$arrayWord2 = str_split($secondString);

	sort($arrayWord1);
	sort($arrayWord2);

	return $arrayWord1 === $arrayWord2;
}

function checkSymbol(string $string)
{
	$stringArray = str_split($string);
	$arraySymbol = array_unique($stringArray);
	$result = [];
	$resultString = '';
	$count = 0;
	$current = $stringArray [0];
	for ($i = 0; $i < count($stringArray); $i++) {
		if ($stringArray [$i] == $current) {
			$count++;
		}
		else {
			$result[] = array($current, $count);
			$count = 1;
		}
		$current = $stringArray [$i];
	}
	$result[] = array($current, $count);
	rsort($result);
	foreach ($arraySymbol as $symbol)
	{
		$keys = array_search($symbol, array_column($result, 0));
		$resultString .= $result[$keys][0].'='.$result[$keys][1].'; ';
	}

	echo $resultString;
}
checkSymbol('aaaaaaaaaaffaaffffbbqqqqabbbbbbb');