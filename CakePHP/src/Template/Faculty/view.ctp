<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->faculty_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->faculty_id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->faculty_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Faculty'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="faculty view large-9 medium-8 columns content">
    <h3><?= h($faculty->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($faculty->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faculty Id') ?></th>
            <td><?= $this->Number->format($faculty->faculty_id) ?></td>
        </tr>
    </table>
</div>
