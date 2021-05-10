<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department[]|\Cake\Collection\CollectionInterface $department
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

<!--<body>-->
<!--<div class="department index large-9 medium-8 columns content">-->
<!--    <h3>--><?//= __('Department') ?><!--</h3>-->
<!--    <table class='table .table-bordered '>-->
<!--        <thead>-->
<!--            <tr>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('department_id') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('name') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('faculty_id') ?><!--</th>-->
<!--                <th scope="col" class="actions">--><?//= __('Actions') ?><!--</th>-->
<!--            </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--            --><?php //foreach ($department as $department): ?>
<!--            <tr>-->
<!--                <td>--><?//= $this->Number->format($department->department_id) ?><!--</td>-->
<!--                <td>--><?//= h($department->name) ?><!--</td>-->
<!--                <td>--><?//= $department->has('faculty') ? $this->Html->link($department->faculty->name, ['controller' => 'Faculty', 'action' => 'view', $department->faculty->faculty_id]) : '' ?><!--</td>-->
<!--                <td class="actions">-->
<!--                    --><?//= $this->Html->link(__('View'), ['action' => 'view', $department->department_id]) ?>
<!--                    --><?//= $this->Html->link(__('Edit'), ['action' => 'edit', $department->department_id]) ?>
<!--                    --><?//= $this->Form->postLink(__('Delete'), ['action' => 'delete', $department->department_id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->department_id)]) ?>
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<!--    <div class="paginator">-->
<!--        <ul class="pagination">-->
<!--            --><?//= $this->Paginator->first('<< ' . __('first')) ?>
<!--            --><?//= $this->Paginator->prev('< ' . __('previous')) ?>
<!--            --><?//= $this->Paginator->numbers() ?>
<!--            --><?//= $this->Paginator->next(__('next') . ' >') ?>
<!--            --><?//= $this->Paginator->last(__('last') . ' >>') ?>
<!--        </ul>-->
<!--        <p>--><?//= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?><!--</p>-->
<!--    </div>-->
<!--</div>-->



<!--**********************************
    Content body start
***********************************-->
<div class="content-body" style="margin-left:0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Department</h4>
                        <div class="table-responsive">

                            <?php
                            echo $this->Html->script('custom');
                            ?>

                            <table id="example" class="table table-striped table-bordered zero-configuration" style="width:100%; left:0;" >
                                <thead>
                                <tr>
                                    <th>Deparment</th>
                                    <th>Name</th>
                                    <th>Faculty</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <?php foreach ($department as $department): ?>
                                    <tr>
                                        <td><?= $this->Number->format($department->department_id) ?></td>
                                        <td><?= h($department->name) ?></td>
                                        <td><?= $department->has('faculty') ? $this->Html->link($department->faculty->name, ['controller' => 'Faculty', 'action' => 'view', $department->faculty->faculty_id]) : '' ?></td>

                                        <td class="actions">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('View'), ['action' => 'view', $department->department_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $department->department_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-close color-danger"></i>
                                                <?= $this->Html->link(__('Delete'), ['action' => 'delete', $department->department_id], ['confirm' => __('Are you sure you want to delete {0}?', $department->name)]) ?>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                <tfoot>
                                <tr>
                                    <th>Deparment</th>
                                    <th>Name</th>
                                    <th>Faculty</th>
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
