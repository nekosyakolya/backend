<?php
    function last($str)
    {
        $string = '';
        $string = substr($str, -1); 
        return $string;
    }

    function getParamFromGet($arg)
    {
        $string = '';
        if (isset($_GET[$arg]))
        {
            $string = ($_GET[$arg]);
        } 
        return $string;
    }

    function withoutLast($str)
    {
        $string = '';
        $string = substr($str, 0, -1); 
        return $string;
    }
    function revers($str)
    {
        $string = '';
        for ($i = (strlen($str) - 1); $i >= 0; $i--)
        {
            $string = $strings . $str[$i];
        }
        return $string;
    }
    function сheckIdentifier($str)
    {
        $i = 0;
        if (ctype_alpha($str[$i]))
        {
            $letter = True;
            $result = "Yes";
            for ($i = 1; $i< strlen($str); $i++)
            {
                if (is_numeric($str[$i]))
                {
                    $letter = False;
                }
                if (!($letter) && ctype_alpha($str[$i]))
                {
                    $result = "NO, letter comes after figure";
                    break;
                }
                if (ctype_alpha($str[$i]))
                {
                    $letter = True;
                }
            }
        }
        else
        {
            $result = "NO, the first symbol incorrect";
        }
        return $result;
    }
    function deletBlanks($str)
    {
        $blank = '-';
        $space = ' ';
        $string = '';
        $i = 0;
        if ($str[$i] == $blank)
        {
            while ($str[$i] == $blank)
            {
                $i++;
            }
            $string = $string . $str[$i];
        }
        for ($i; $i< strlen($str); $i++)
        {
            if ($str[$i] != $blank)
            {
                $string = $string . $str[$i];
            }
            else if ($i != strlen($str))
            {
                $string = $string . $space;
            } 
        }
        return $string;
    }