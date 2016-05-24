<?php
    require_once('../include/common.inc.php');
    $str = '';
    $str = getParamFromGet('str');
    if (!empty($str))
    {
        echo withoutLast($str);
    }
    else
    {
        echo 'Введите строку';
    }

    