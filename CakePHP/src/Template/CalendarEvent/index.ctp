<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CalendarEvent[]|\Cake\Collection\CollectionInterface $calendarEvent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Calendar Event'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendarEvent index large-9 medium-8 columns content">
    <h3><?= __('Calendar Event') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reminder_date') ?></th>
<!--                <th scope="col">--><?//= $this->Paginator->sort('category') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('color_label') ?><!--</th>-->
                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calendarEvent as $calendarEvent): ?>
            <tr>
                <td><?= $this->Number->format($calendarEvent->event_id) ?></td>
                <td><?= h($calendarEvent->title) ?></td>
                <td><?= h($calendarEvent->description) ?></td>
                <td><?= h($calendarEvent->start_date) ?></td>
                <td><?= h($calendarEvent->end_date) ?></td>
                <td><?= h($calendarEvent->reminder_date) ?></td>
<!--                <td>--><?//= h($calendarEvent->category) ?><!--</td>-->
<!--                <td>--><?//= h($calendarEvent->color_label) ?><!--</td>-->
                <td><?= h($calendarEvent->start_time) ?></td>
                <td><?= h($calendarEvent->end_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $calendarEvent->event_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calendarEvent->event_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calendarEvent->event_id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendarEvent->event_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
