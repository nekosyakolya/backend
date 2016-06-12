<?php
    require_once('../include/common.inc.php');
    $password = '';
    $password = getParamFromGet('password');
    if (!empty($password))
    {
        echo passwordStrength($password);
    }
    else
    {
        echo 'Введите пароль';
    }