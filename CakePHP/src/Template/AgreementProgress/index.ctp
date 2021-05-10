<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgreementProgres[]|\Cake\Collection\CollectionInterface $agreementProgress
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agreement Progres'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agreement'), ['controller' => 'Agreement', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agreement'), ['controller' => 'Agreement', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agreementProgress index large-9 medium-8 columns content">
    <h3><?= __('Agreement Progress') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('agreement_progress_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comments') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datetime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agreement_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agreementProgress as $agreementProgres): ?>
            <tr>
                <td><?= $this->Number->format($agreementProgres->agreement_progress_id) ?></td>
                <td><?= h($agreementProgres->comments) ?></td>
                <td><?= h($agreementProgres->datetime) ?></td>
                <td><?= $agreementProgres->has('agreement') ? $this->Html->link($agreementProgres->agreement->agreement_id, ['controller' => 'Agreement', 'action' => 'view', $agreementProgres->agreement->agreement_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agreementProgres->agreement_progress_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agreementProgres->agreement_progress_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agreementProgres->agreement_progress_id], ['confirm' => __('Are you sure you want to delete # {0}?', $agreementProgres->agreement_progress_id)]) ?>
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
