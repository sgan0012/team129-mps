<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CalendarEvent $calendarEvent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calendar Event'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="calendarEvent form large-9 medium-8 columns content">
    <?= $this->Form->create($calendarEvent) ?>
    <fieldset>
        <legend><?= __('Add Calendar Event') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('start_date');
            echo $this->Form->control('end_date');
            echo $this->Form->control('reminder_date');
//            echo $this->Form->control('category');
//            echo $this->Form->control('color_label');
            echo $this->Form->control('start_time');
            echo $this->Form->control('end_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
