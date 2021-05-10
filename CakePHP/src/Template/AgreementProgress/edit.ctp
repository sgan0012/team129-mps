<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgreementProgres $agreementProgres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agreementProgres->agreement_progress_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agreementProgres->agreement_progress_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agreement Progress'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agreement'), ['controller' => 'Agreement', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agreement'), ['controller' => 'Agreement', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agreementProgress form large-9 medium-8 columns content">
    <?= $this->Form->create($agreementProgres) ?>
    <fieldset>
        <legend><?= __('Edit Agreement Progres') ?></legend>
        <?php
            echo $this->Form->control('comments');
            echo $this->Form->control('datetime');
            echo $this->Form->control('agreement_id', ['options' => $agreement]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
