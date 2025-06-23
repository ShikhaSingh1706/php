<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="user" placeholder="eneter user name"/>
            <br><br>
            <button name="button" value="set"> set session</button>
            <br><br>
            <button name="button" value="get"> get session</button>
            <br><br>
            <button name="button" value="delete"> delete session</button>
</form>
        <script src="" async defer></script>
    </body>
</html>


<?php

session_start();
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        $_SESSION['user']=$val;

    }
    if($_POST['button']=="get"){
        echo $_SESSION['user'];

    }
    if($_POST['button']=="delete"){
        Session_destroy();

    }

}




?>