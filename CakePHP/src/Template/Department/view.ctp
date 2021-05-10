<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>


<html>
<body>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Department</h3>
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($department->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Faculty') ?></th>
                        <td><?= $department->has('faculty') ? $this->Html->link($department->faculty->name, ['controller' => 'Faculty', 'action' => 'view', $department->faculty->faculty_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Department Id') ?></th>
                        <td><?= $this->Number->format($department->department_id) ?></td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-lg-2 ml-auto">

                <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $department->department_id]) ?></button>
                <button type="button" class="btn btn-outline-danger"><?= $this->Html->link(__('Delete'), ['action' => 'delete', $department->department_id], ['confirm' => __('Are you sure you want to delete {0}?', $department->name)]) ?></button>

            </div>

        </div>
    </div>
</div>

</body>
</html>
