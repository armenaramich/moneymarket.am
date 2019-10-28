<!DOCTYPE html>
<html>
    <head>
        <title>My MVC</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/default.css">
        <script type="text/javascript" src="<?php echo URL;?>public/js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="<?php echo URL;?>public/js/main.js"></script>
    </head>

    <body>
        <div id="header">
            headers
            <br>
            <a href="<?php echo URL;?>index">Index</a>
            <a href="<?php echo URL;?>help">Help</a>
            <?php if(Session::get("isUser")):?>
                <a href="<?php echo URL;?>login/logout">Logout</a>
            <?php else:?>
                <a href="<?php echo URL;?>login">Login</a>
            <?php endif;?>
        </div>
        <div id="content">
        <hr>  
        