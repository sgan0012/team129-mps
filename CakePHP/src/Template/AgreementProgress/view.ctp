<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgreementProgres $agreementProgres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agreement Progres'), ['action' => 'edit', $agreementProgres->agreement_progress_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agreement Progres'), ['action' => 'delete', $agreementProgres->agreement_progress_id], ['confirm' => __('Are you sure you want to delete # {0}?', $agreementProgres->agreement_progress_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agreement Progress'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agreement Progres'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agreement'), ['controller' => 'Agreement', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agreement'), ['controller' => 'Agreement', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agreementProgress view large-9 medium-8 columns content">
    <h3><?= h($agreementProgres->agreement_progress_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($agreementProgres->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agreement') ?></th>
            <td><?= $agreementProgres->has('agreement') ? $this->Html->link($agreementProgres->agreement->agreement_id, ['controller' => 'Agreement', 'action' => 'view', $agreementProgres->agreement->agreement_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agreement Progress Id') ?></th>
            <td><?= $this->Number->format($agreementProgres->agreement_progress_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datetime') ?></th>
            <td><?= h($agreementProgres->datetime) ?></td>
        </tr>
    </table>
</div>
