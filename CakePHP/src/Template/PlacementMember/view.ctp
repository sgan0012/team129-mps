<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlacementMember $placementMember
 */
?>

<html>
<body>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Placement Member</h3>
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($placementMember->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email Address') ?></th>
                        <td><?= h($placementMember->email_address) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Department') ?></th>
                        <td><?= $placementMember->has('department') ? $this->Html->link($placementMember->department->name, ['controller' => 'Department', 'action' => 'view', $placementMember->department->department_id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Member Id') ?></th>
                        <td><?= $this->Number->format($placementMember->member_id) ?></td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-lg-2 ml-auto">

                <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $placementMember->member_id]) ?></button>
                <button type="button" class="btn btn-outline-danger"><?= $this->Html->link(__('Delete'), ['action' => 'delete', $placementMember->member_id], ['confirm' => __('Are you sure you want to delete {0}?', $placementMember->name)]) ?></button>

            </div>

        </div>
    </div>
</div>

</body>
</html>
