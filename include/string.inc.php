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
            $string = $string.$str[$i];
        }
        return $string;
    }