<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agreement $agreement
 */

use Cake\I18n\Date;

?>
<html>

<body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Agreement <?= h($agreement->agreement_id) ?></h3>
                <div class="table-responsive">
                    <table class="table table-bordered verticle-middle">
                        <tbody>
                            <tr>
                                <th scope="row"><?= __('Agreement Id') ?></th>
                                <td><?= $this->Number->format($agreement->agreement_id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Provider') ?></th>
                                <td><?= $agreement->has('provider') ? $this->Html->link($agreement->provider->name, ['controller' => 'Provider', 'action' => 'view', $agreement->provider->provider_id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Status') ?></th>
                                <td><?= h($agreement->status) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Placement Member') ?></th>
                                <td><?= $agreement->has('placement_member') ? $this->Html->link($agreement->placement_member->name, ['controller' => 'PlacementMember', 'action' => 'view', $agreement->placement_member->member_id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Start Date') ?></th>
                                <td><?= h($agreement->start_date) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('End Date') ?></th>
                                <td><?= h($agreement->end_date) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Reminder') ?></th>
                                <td><?= h($agreement->reminder) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Comment') ?></th>
                                <td><?= h($agreement->comment) ?></td>
                            </tr>

                        </tbody>
                    </table>

                    <!--                <td>--><? //= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provider->provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->name)]) 
                                                ?>
                    <!--</td>-->
                </div>
                <div class="col-lg-2 ml-auto">

                    <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $agreement->agreement_id]) ?></button>
                    <button type="button" class="btn btn-outline-danger"><?= $this->Html->link(__('Delete'), ['action' => 'delete', $agreement->agreement_id], ['confirm' => __('Are you sure you want to delete this agreement?')]) ?></button>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> Agreement Tracking <?= h($agreement->agreement_id) ?></h3>
                    <div class="table-responsive">
                        <div class="card-body">
                            <?php foreach ($agreementProgress as $agreementProgress) : ?>
                                <div class="media media-reply">
                                    <div class="media-body">
                                        <div class="d-sm-flex justify-content-between mb-2">
                                            <h5 class="mb-sm-0"><small class="fa fa-calendar-check-o"></small><?php echo $agreementProgress["datetime"]->format('d/m/Y H:i:s'); ?></h5>
                                            <div class="media-reply__link">
                                                <i class="fa fa-close color-danger"></i>
                                                <?= $this->Html->link(__('Delete'), ['controller'=>'AgreementProgress','action' => 'delete', $agreementProgress->agreement_progress_id,$agreement->agreement_id], ['confirm' => __('Are you sure you want to delete this progress comment?')]) ?>
                                            </div>
                                        </div>

                                        <p><?php echo $agreementProgress["comments"]; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <?= $this->Form->create('', ['url' => [
                                'controller' => 'AgreementProgress',
                                'action' => 'add',$agreement->agreement_id
                            ], 'class' => 'form-profile']) ?>
                            <div class="form-group">
                                <?php echo $this->Form->textarea('comments', ['required' => true, 'class' => 'form-control', 'id' => 'comments', 'row' => '5', 'placeholder' => 'Post a new message']); ?>

                            </div>
                            <div class="d-flex align-items-start">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-primary']) ?>

                            </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>