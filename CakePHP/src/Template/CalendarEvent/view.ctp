<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CalendarEvent $calendarEvent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Calendar Event'), ['action' => 'edit', $calendarEvent->event_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Calendar Event'), ['action' => 'delete', $calendarEvent->event_id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendarEvent->event_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calendar Event'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendar Event'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calendarEvent view large-9 medium-8 columns content">
    <h3><?= h($calendarEvent->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($calendarEvent->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($calendarEvent->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($calendarEvent->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color Label') ?></th>
            <td><?= h($calendarEvent->color_label) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Id') ?></th>
            <td><?= $this->Number->format($calendarEvent->event_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($calendarEvent->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($calendarEvent->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reminder Date') ?></th>
            <td><?= h($calendarEvent->reminder_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($calendarEvent->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($calendarEvent->end_time) ?></td>
        </tr>
    </table>
</div>
