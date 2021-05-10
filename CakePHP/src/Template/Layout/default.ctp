<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Dashboard';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <?= $this->Html->css('style2.css') ?>
    <?= $this->Html->css('dataTables.bootstrap4.min.css'); ?>
    <?= $this->Html->css('fullcalendar.min.css'); ?>

</head>
<style>

</style>

<body>
    <div id="main-wrapper" style="margin: 0px;">

        <!--**********************************
Nav header start
***********************************-->
        <div class="nav-header">
            <div class="brand-logo">

                <b class="logo-abbr" style="color:white;">MPS </b>
                <span class="logo-compact" style=" padding-left: 30px;color:white; font-size:30px;">MPS</span>
                <span class="brand-title" style=" padding-left: 30px; color:white; font-size:30px;">MPS</span>

            </div>
        </div>
        <div class="header" style="margin-bottom:10px">
            <div class="header-content clearfix" style="margin-bottom: 10px;">

                <div class="nav-control" style="margin-bottom:10px">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left" style="margin-bottom:10px">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <!-- <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form> -->
                        </div>
                    </div>
                </div>

                <div class="header-right" style="margin-bottom:10px">

                    <ul class="clearfix">

                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2"><?php echo $ScheduleReminderNum + $AgreementReminderNum; ?></span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class=""><?php echo $ScheduleReminderNum + $AgreementReminderNum; ?> New Notifications</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2"><?php echo $ScheduleReminderNum + $AgreementReminderNum; ?></span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body" style="overflow:scroll;height:300px;">
                                    <ul>
                                        <?php foreach ($ScheduleReminder as $ScheduleReminder) : ?>
                                            <li>
                                                <?= $this->Html->link('<span class="mr-3 avatar-icon bg-danger-lighten-2" style="background-color: #3375E1;"><i class="icon-shield"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Schedule ' . $ScheduleReminder["schedule_id"] . ' is ending soon.</h6>
                                            <span class="notification-text">View</span>
                                        </div>', ['controller' => 'Schedule', 'action' => 'view', $ScheduleReminder->schedule_id], ['escape' => false]) ?>

                                            </li>
                                        <?php endforeach; ?>
                                        <?php foreach ($AgreementReminder as $AgreementReminder) : ?>
                                            <li>
                                                <?= $this->Html->link('<span class="mr-3 avatar-icon bg-danger-lighten-2" style="background-color: #CE2B23;"><i class="icon-shield"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Agreement ' . $AgreementReminder["agreement_id"] . ' is ending soon.</h6>
                                            <span class="notification-text">View</span>
                                        </div>', ['controller' => 'Agreement', 'action' => 'view', $AgreementReminder->agreement_id], ['escape' => false]) ?>

                                            </li>
                                        <?php endforeach; ?>

                                    </ul>

                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                <div style="float:right;margin-right:50px;height:100%;padding-top:27px">
                    <?php if ($this->request->getSession()->read('Auth')) {
                    // user is logged in, show logout..user menu etc
                    echo $this->Html->link('logout', array('controller' => 'Users', 'action' => 'logout'));
                } elseif ($this->request->getSession()->read()){
                        //or if not logged in, show 'login' 
                        echo $this->Html->link('login', array('controller' => 'Users', 'action' => 'login'));
                    }?>

                    </div>
            </div>
        </div>

        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label" style="padding-left: 15px;font-size:1.2rem;padding-bottom:0px">Dashboard</li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa icon-speedometer"></i><span class="nav-text">Dashboard</span>', array('controller' => 'pages', 'action' => 'home'), ['escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-address-book-o"></i><span class="nav-text">Provider</span>', array('controller' => 'Provider', 'action' => 'index'), ['escape' => false]); ?>
                    </li>

                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-handshake-o"></i><span class="nav-text">Agreement</span>', array('controller' => 'Agreement', 'action' => 'index'), ['escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-file-o"></i><span class="nav-text">Schedule</span>', array('controller' => 'Schedule', 'action' => 'index'), ['escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-group"></i><span class="nav-text">Placement Member</span>', array('controller' => 'PlacementMember', 'action' => 'index'), ['escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-graduation-cap"></i><span class="nav-text">Department</span>', array('controller' => 'Department', 'action' => 'index'), ['escape' => false]); ?>
                    </li>
                    <!--            <li>-->
                    <!--            --><?php //echo $this->Html->link('<i class="fa fa-envelope"></i><span class="nav-text">Email</span>',array('controller' => 'Inbox', 'action' => 'index'),['escape' => false]);
                                        ?>
                    <!--            </li>-->
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-calendar"></i><span class="nav-text">Calendar</span>', array('controller' => 'Calendar', 'action' => 'index'), ['escape' => false]); ?>
                    </li>





                    <li class="nav-label" style="padding-left: 15px;font-size:1.2rem;padding-bottom:0px">Forms</li>

                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-plus-square-o"></i><span class="nav-text">Add New Provider</span>', array('controller' => 'Provider', 'action' => 'add'), ['escape' => false]); ?>
                    </li>

                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-plus-square-o"></i><span class="nav-text">Add New Agreement</span>', array('controller' => 'Agreement', 'action' => 'add'), ['escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-plus-square-o"></i><span class="nav-text">Add New Schedule</span>', array('controller' => 'Schedule', 'action' => 'add'), ['escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-plus-square-o"></i><span class="nav-text">Add New Placement Member</span>', array('controller' => 'PlacementMember', 'action' => 'add'), ['escape' => false]); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-plus-square-o"></i><span class="nav-text">Add New Department</span>', array('controller' => 'Department', 'action' => 'add'), ['escape' => false]); ?>
                    </li>


                </ul>
            </div>
        </div>
        <?= $this->Flash->render() ?>
        <div class="content-body" style="height: 100%;">
            <?= $this->fetch('content') ?>
        </div>

        <?= $this->Html->script('common.min.js'); ?>
        <?= $this->Html->script('custom.min.js'); ?>
        <?= $this->Html->script('settings.js'); ?>
        <?= $this->Html->script('gleek.js'); ?>
        <?= $this->Html->script('styleSwitcher.js'); ?>
        <!---->
        <!--    --><? //= $this->Html->script('http://code.jquery.com/jquery-1.12.0.min.js');
                    ?>
        <!--    --><? //= $this->Html->script('http://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js');
                    ?>

        <?= $this->Html->script('jquery.dataTables.min.js'); ?>
        <?= $this->Html->script('jquery-1.12.0.min.js'); ?>

        <?= $this->Html->script('jquery.validate-init.js'); ?>
        <?= $this->Html->script('jquery.validate.min.js'); ?>
        <?= $this->Html->script('jquery.validate.postcode.js'); ?>

        <?= $this->Html->script('jquery-ui.min.js'); ?>
        <?= $this->Html->script('moment.min.js'); ?>
        <?= $this->Html->script('fullcalendar.min.js'); ?>

</body>

</html>
