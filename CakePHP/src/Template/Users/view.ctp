<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<html>
<head>

    <?= $this->Html->css('style2.css') ?>
    <?= $this->Html->script('common.min.js'); ?>
    <?= $this->Html->script('custom.min.js'); ?>
    <?= $this->Html->script('settings.js'); ?>
    <?= $this->Html->script('gleek.js'); ?>
    <?= $this->Html->script('styleSwitcher.js'); ?>


    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                columnDefs: [
                    { orderable: false, targets: -1 }
                ]
            });
        } );

    </script>
</head>

<div class="content-body" style="margin-left:0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <nav class="large-3 medium-4 columns" id="actions-sidebar">
                            <ul class="side-nav">
                            <li class="heading"><?= __('Actions') ?></li>
                            <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
                            <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                            <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
                            </ul>
                        </nav>
                        <div class="table-responsive">
                        <h3><?= h($user->id) ?></h3>
                            <table table id="table" class="table table-striped table-bordered zero-configuration" style="width:100%; left:0;">
                            <thead>
                            <tr>
                                <th scope="row"><?= __('Email') ?></th>
                                <td><?= h($user->email) ?></td>
                            </tr>

                            <tr>
                                <th scope="row"><?= __('Password') ?></th>
                                <td><?= h($user->password) ?></td>
                                </tr>

                                <tr>
                                    <th scope="row"><?= __('Id') ?></th>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                </tr>
        
                                <tr>
                                    <th scope="row"><?= __('Created') ?></th>
                                    <td><?= h($user->created) ?></td>
                                </tr>
        
                                <tr>
                                    <th scope="row"><?= __('Modified') ?></th>
                                    <td><?= h($user->modified) ?></td>
                                </tr> 
                                </thead> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#table").DataTable({
        "lengthMenu": [ [10, 15, 25, 50, 100, -1], [10, 15, 25, 50, 100, "All"] ],
        "iDisplayLength": 300,
        bInfo: false,
        responsive: true,
        "bAutoWidth": false
    });
</script>
</html>