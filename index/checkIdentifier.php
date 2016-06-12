<?php
    require_once('../include/common.inc.php');
    $str = '';
    $str = getParamFromGet('str');
    if (!empty($str))
    {
        $string = сheckIdentifier($str);
        if ($string == 1)
        {
            $str = 'Yes';
        }
        else if ($string == 3)
        {
            $str = 'NO, incorrect data';
        }
        else if ($string == 2)
        {
            $str = 'NO, the first symbol incorrect';
        }
        echo $str;
    }
    else
    {
        echo 'Введите строку';
    }