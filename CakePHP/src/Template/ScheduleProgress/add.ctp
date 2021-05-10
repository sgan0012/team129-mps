<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ScheduleProgres $scheduleProgres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schedule Progress'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schedule'), ['controller' => 'Schedule', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedule', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scheduleProgress form large-9 medium-8 columns content">
    <?= $this->Form->create($scheduleProgres) ?>
    <fieldset>
        <legend><?= __('Add Schedule Progres') ?></legend>
        <?php
            echo $this->Form->control('comments');
            echo $this->Form->control('datetime');
            echo $this->Form->control('schedule_id', ['options' => $schedule]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
