
function calcScoreForLen($str)
{
	return strlen($str) * 4;
}
function calcScoreForAllNum($str)
{
	$result = 0;
	if (ctype_digit($str))
	{
		$result -= strlen($str);
	}
	return $result;
}
function calcScoreForAllChars($str)
{
	$result = 0;
	if (ctype_alpha($str))
	{
		$result -= strlen($str);
	}
	return $result;
}
function calcScoreForNumbers($str)
{
	$result = 0;
	for ($i; $i < strlen($str); $i++)
	{
		if (is_numeric($str[$i]))
		{
			$result++;
		}
	}
	return $result * 4;
}
function calcScoreForHigh($str)
{
	$result = 0;
	for ($i; $i < strlen($str); $i++)
	{
		if (ctype_upper($str[$i]))
		{
			$result++;
		}
	}
	if ($result != 0)
	{
		return (strlen($str) - $result) * 2;
	}
	else
	{
		return 0;
	}
}
function calcScoreForLower($str)
{
	$result = 0;
	for ($i; $i < strlen($str); $i++)
	{
		if (ctype_lower($str[$i]))
		{
			$result++;
		}
	}
	if ($result != 0)
	{
		return (strlen($str) - $result) * 2;
	}
	else
	{
		return 0;
	}
}
function calcScoreForRepeats($str)
{
	$result = 0;
	for ($i; $i < strlen($str); $i++)
	{
		if (substr_count($str, $str[$i], $i) > 1)
		{
			$result -= substr_count($str, $str[$i], $i);
		}
	}
	return $result;
}
function passwordStrength($str)
{
	$result = 0;
	if (ctype_alnum($str))
	{
		$result += calcScoreForLen($str);
		$result += calcScoreForNumbers($str);
		$result += calcScoreForHigh($str);
		$result += calcScoreForLower($str);
		$result += calcScoreForAllChars($str);
		$result += calcScoreForAllNum($str);
		$result += calcScoreForRepeats($str);
	}
	return $result;
}