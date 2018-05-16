<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/5/16
 * Time: 8:18
 */
session_start();
if(!isset($_session['valid_user'])
{
    echo'NO ACCESS TO PAGE THROUGH URL';
    exit(0);
}
unset($_session['valid_user']);
session_destroy();
?>
<!DOCTYPE html>
<head>
    <title>
          You Have Logged out.
    </title>
</head>
