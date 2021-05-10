<?php

/**
 * Created by PhpStorm.
 * User: justinwong
 * Date: 20/7/18
 * Time: 3:38 PM
 */
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?= $this->Html->charset("utf-8") ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <?= $this->Html->css('style2.css') ?>
    <?= $this->Html->css('dataTables.bootstrap4.min.css'); ?>
    <?= $this->Html->css('fullcalendar.min.css'); ?>

    <!-- PTminder Client Login Form -->
    <?= $this->Html->css('ptminder-client-area-login'); ?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="https://ptminder.com/website/extform/?guid=l6CXr6LlytrXyM8=&st[]=forgot_password"></script>
</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    

                    <?= $this->Flash->render(); ?>

                    <?= $this->fetch('content'); ?>

                </div>
                
            </div>
        </div>
    </div>


    <?= $this->Html->script('common.min.js'); ?>
    <?= $this->Html->script('custom.min.js'); ?>
    <?= $this->Html->script('settings.js'); ?>
    <?= $this->Html->script('gleek.js'); ?>
    <?= $this->Html->script('styleSwitcher.js'); ?>


    <?= $this->Html->script('jquery.dataTables.min.js'); ?>
    <?= $this->Html->script('jquery-1.12.0.min.js'); ?>

    <?= $this->Html->script('jquery.validate-init.js'); ?>
    <?= $this->Html->script('jquery.validate.min.js'); ?>
    <?= $this->Html->script('jquery.validate.postcode.js'); ?>

    <?= $this->Html->script('jquery-ui.min.js'); ?>
    <?= $this->Html->script('moment.min.js'); ?>
    <?= $this->Html->script('fullcalendar.min.js'); ?>
    <?= $this->Html->script('fullcalendar-init.js'); ?>


</body>

</html>