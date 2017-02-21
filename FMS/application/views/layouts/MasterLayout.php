<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title><?php echo @$title; ?></title>
        <link rel="stylesheet" href="<?php echo resource_url("vendors/bootstrap/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" href="<?php echo resource_url("vendors/font-awesome/css/font-awesome.css"); ?>" />
        <?php 
            if(isset($css)){
                foreach ($css as $link) {
                    echo '
                        <link rel="stylesheet" href="'.resource_url("$link").'" />
                    ';
                }
            }
        ?>
        <link rel="icon" href="<?php echo resource_url("img/logo.ico"); ?>"/>
    </head>
    <?php
        echo @$yield;
    ?>
    <script type="text/javascript" src="<?php echo resource_url("vendors/jQuery/jquery-3.1.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo resource_url("vendors/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo resource_url("vendors/notify/notify.min.js"); ?>"></script>
    <?php 
        if(isset($scripts)){
            foreach ($scripts as $link) {
                echo '
                    <script type="text/javascript" src="'.resource_url("$link").'"></script>
                ';
            }
        }
    ?>
</html>