<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo @$title; ?></title>
        <link rel="stylesheet" href="<?php echo resource_url("vendors/bootstrap/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" href="<?php echo resource_url("vendors/font-awesome/css/font-awesome.css"); ?>" />
        <?php 
            if(isset($css)){
                foreach ($css as $link) {
                    echo '
                        <link rel="stylesheet" href="'.resource_url("css/$link").'" />
                    ';
                }
            }
        ?>
        <link rel="icon" href="<?php echo resource_url("img/logo.ico"); ?>"/>
    </head>
    <body>