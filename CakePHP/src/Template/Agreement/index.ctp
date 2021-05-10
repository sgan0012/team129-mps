<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agreement[]|\Cake\Collection\CollectionInterface $agreement
 */
?>

<html>
<head>
    <?= $this->Html->css('style2.css') ?>

    <?= $this->Html->script('common.min.js'); ?>
    <?= $this->Html->script('custom.min.js'); ?>
    <?= $this->Html->script('settings.js'); ?>
    <?= $this->Html->script('gleek.js'); ?>
    <?= $this->Html->script('styleSwitcher.js'); ?>
</head>
<body>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body" style="margin-left:0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Agreement</h4>
                        <div class="table-responsive">

                            <?php
                            echo $this->Html->script('custom');
                            ?>

                            <table id="example" class="table table-striped table-bordered zero-configuration" style="width:100%; left:0;" >
                                <thead>
                                <tr>
                                    <th>Agreement ID</th>
                                    <th>Provider</th>
                                    <th>Status</th>
                                    <th>End Date</th>
                                    <th>Member</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <?php foreach($agreement as $agreement): ?>
                                    <tr>
                                        <td><?= h($agreement->agreement_id) ?></td>
                                        <td><?= $agreement->has('provider') ? $this->Html->link($agreement->provider->name, ['controller' => 'Provider', 'action' => 'view', $agreement->provider->provider_id]) : '' ?></td>
                                        <td><?= h($agreement->status) ?></td>
                                        <td><?= h($agreement->end_date) ?></td>
                                        <td><?= $agreement->has('placement_member') ? $this->Html->link($agreement->placement_member->name, ['controller' => 'PlacementMember', 'action' => 'view', $agreement->placement_member->member_id]) : '' ?></td>

                                        <td class="actions">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('View'), ['action' => 'view', $agreement->agreement_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agreement->agreement_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-close color-danger"></i>
                                                <?= $this->Html->link(__('Delete'), ['action' => 'delete', $agreement->agreement_id], ['confirm' => __('Are you sure you want to delete this agreement?')]) ?>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                <tfoot>
                                <tr>
                                    <th>Agreement ID</th>
                                    <th>Provider</th>
                                    <th>Status</th>
                                    <th>End Date</th>
                                    <th>Member</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
    Content body end
***********************************-->
</body>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            columnDefs: [
                { orderable: false, targets: -1 }
            ]
        });
    } );

</script>
</html>
