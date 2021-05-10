<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->Breadcrumbs->add('Change Password', null);
?>

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Change Password</strong>
                </div>
                <div class="card-body card-block">
                    <?= $this->Form->create(''); ?>

                    <div class="row form-group">
                        <div class="col col-md-5">
                            <?= $this->Form->label('username', 'Username', ['class' => 'form-control-label']); ?>
                        </div>
                        <div class="col-12 col-md-7">
                            <p class="form-control-static"> <?= $user->username ?> </p>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-5">
                            <?= $this->Form->label('current', 'Current password', ['class' => 'form-control-label']); ?>
                        </div>
                        <div class="col-12 col-md-7">
                            <?= $this->Form->control('current', ['label' => false, 'type' => 'password','placeholder' => 'Your current password', 'class' => 'form-control']); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-5">
                            <?= $this->Form->label('new1', 'New password', ['class' => 'form-control-label']); ?>
                        </div>
                        <div class="col-12 col-md-7">
                            <?= $this->Form->control('new1', ['label' => false,'type' => 'password', 'placeholder' => 'Your new password', 'class' => 'form-control']); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-5">
                            <?= $this->Form->label('new2', 'Confirm the password', ['class' => 'form-control-label']); ?>
                        </div>
                        <div class="col-12 col-md-7">
                            <?= $this->Form->control('new2', ['label' => false,'type' => 'password', 'placeholder' => 'Confirm the password', 'class' => 'form-control']); ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <?= $this->Form->button('Update password',['class' => 'btn btn-primary']); ?>
                </div>
                <?= $this->Form->end(); ?>
            </div>
            <?= $this->Html->link('<i class="fa fa-arrow-left"></i> Back', $this->request->referer(), ['class' => 'btn btn-secondary', 'escape' => false]); ?>
        </div>
    </div>
</div>