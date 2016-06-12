<?php
    function last($receivedString)
    {
        $newString = '';
        $newString = substr($receivedString, -1); 
        return $newString;
    }

    function getParamFromGet($receivedString)
    {
        $newString = '';
        if (isset($_GET[$receivedString]))
        {
            $newString = ($_GET[$receivedString]);
        } 
        return $newString;
    }

    function withoutLast($receivedString)
    {
        $newString = '';
        $newString = substr($receivedString, 0, -1); 
        return $newString;
    }

    function revers($receivedString)
    {
        $newString = '';
        for ($i = (strlen($receivedString) - 1); $i >= 0; $i--)
        {
            $newString = $newString . $receivedString[$i];
        }
        return $newString;
    }

    function сheckIdentifier($receivedString)
    {
        $result = 3; 
        if (ctype_alnum($receivedString))
        {
            $result = 1;
            if (is_numeric($receivedString[0]))
            {
                $result = 2;
            }  
        }
        return $result;
    }

    function deleteFirstBlanks($receivedString)
    {
        if ($receivedString[$i] == $space)
        {
            while ($receivedString[$i] == $space)
            {
                $i++;
            }
            $newString = $newString . $receivedString[$i];
        }
        return $newString;
    }

    function deleteBlanks($receivedString)
    {
        $space = ' ';
        $newString = '';
        $i = 0;
        $newString = deleteFirstBlanks($receivedString);
        for ($i; $i < strlen($receivedString); $i++)
        {
            if ($receivedString[$i] != $space)
            {
                $newString = $newString . $receivedString[$i];
            }
            else if ($i != strlen($receivedString))
            {
                $newString = $newString. $space;
            } 
        }
        return $newString;
    }

    function passwordStrength($password)
    {
        $reliabilityPassword = 0;
        $countFigures = 0;
        $uppercase = 0;
        $n = strlen($password);
        if(ctype_alnum($password)) 
        {
            for ($i = 0; $i< strlen($password); $i++)
            {
                if (is_numeric($str[$i]))
                {
                    $countFigures++;
                }
                if (ctype_lower($str[$i]))
                {
                    $uppercase++;
                }
            }
            $reliabilityPassword = $reliabilityPassword + (4 * $n) + (4 * $countFigures) + (($n - $uppercase) * 2);
        }
        return $reliabilityPassword;
    }