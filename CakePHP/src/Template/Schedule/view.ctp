<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
use Cake\I18n\Date;
?>

<html>
<body>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Schedule <?= h($schedule->schedule_id) ?></h3>
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Schedule Id') ?></th>
                        <td><?= $this->Number->format($schedule->schedule_id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Provider') ?></th>
                        <td><?= $schedule->has('provider') ? $this->Html->link($schedule->provider->name, ['controller' => 'Provider', 'action' => 'view', $schedule->provider->provider_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Status') ?></th>
                        <td><?= h($schedule->status) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Department') ?></th>
                        <td><?= $schedule->has('department') ? $this->Html->link($schedule->department->name, ['controller' => 'Department', 'action' => 'view', $schedule->department->department_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Placement Member') ?></th>
                        <td><?= $schedule->has('placement_member') ? $this->Html->link($schedule->placement_member->name, ['controller' => 'PlacementMember', 'action' => 'view', $schedule->placement_member->member_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Start Date') ?></th>
                        <td><?= h($schedule->start_date) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('End Date') ?></th>
                        <td><?= h($schedule->end_date) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Reminder') ?></th>
                        <td><?= h($schedule->reminder) ?></td>
                    </tr>

                    <tr>
                        <th scope="row"><?= __('Comment') ?></th>
                        <td><?= h($schedule->comment) ?></td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <div class="col-lg-2 ml-auto">

                <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedule->schedule_id]) ?></button>
                <button type="button" class="btn btn-outline-danger"><?= $this->Html->link(__('Delete'), ['action' => 'delete', $schedule->schedule_id], ['confirm' => __('Are you sure you want to delete this schedule?')]) ?></button>

            </div>
        </div>
    </div>



    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title"> Schedule Tracking</h3>
                <div class="table-responsive">
                    <div class="card-body">
                    <?php foreach ($scheduleProgress as $scheduleProgress) : ?>
                                <div class="media media-reply">
                                    <div class="media-body">
                                        <div class="d-sm-flex justify-content-between mb-2">
                                            <h5 class="mb-sm-0"><small class="fa fa-calendar-check-o"></small><?php echo $scheduleProgress["datetime"]->format('d/m/Y H:i:s'); ?></h5>
                                            <div class="media-reply__link">
                                                <i class="fa fa-close color-danger"></i>
                                                <?= $this->Html->link(__('Delete'), ['controller'=>'ScheduleProgress','action' => 'delete', $scheduleProgress->schedule_progress_id,$schedule->schedule_id], ['confirm' => __('Are you sure you want to delete this progress comment?')]) ?>
                                            </div>
                                        </div>

                                        <p><?php echo $scheduleProgress["comments"]; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <?= $this->Form->create('', ['url' => [
                                'controller' => 'ScheduleProgress',
                                'action' => 'add',$schedule->schedule_id
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
