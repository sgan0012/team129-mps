<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ScheduleProgres $scheduleProgres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schedule Progres'), ['action' => 'edit', $scheduleProgres->schedule_progress_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schedule Progres'), ['action' => 'delete', $scheduleProgres->schedule_progress_id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheduleProgres->schedule_progress_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schedule Progress'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule Progres'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedule'), ['controller' => 'Schedule', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedule', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scheduleProgress view large-9 medium-8 columns content">
    <h3><?= h($scheduleProgres->schedule_progress_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($scheduleProgres->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule') ?></th>
            <td><?= $scheduleProgres->has('schedule') ? $this->Html->link($scheduleProgres->schedule->schedule_id, ['controller' => 'Schedule', 'action' => 'view', $scheduleProgres->schedule->schedule_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule Progress Id') ?></th>
            <td><?= $this->Number->format($scheduleProgres->schedule_progress_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datetime') ?></th>
            <td><?= h($scheduleProgres->datetime) ?></td>
        </tr>
    </table>
</div>
