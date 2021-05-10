<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider $provider
 */
?>
<html>
<body>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?= h($provider->name) ?></h3>
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle">
                    <tbody>
                    <tr>
                        <th>Name</th>
                        <td><?= h($provider->name) ?></td>
                    </tr>

                    <tr>
                        <th>ABN</th>
                        <td><?= h($provider->abn) ?></td>
                    </tr>

                    <tr>
                        <th>Address</th>
                        <td><?= h($provider->address) ?></td>
                    </tr>

                    <tr>
                        <th>City</th>
                        <td><?= h($provider->city) ?></td>
                    </tr>

                    <tr>
                        <th>Suburb</th>
                        <td><?= h($provider->suburb) ?></td>
                    </tr>

                    <tr>
                        <th>State Territory</th>
                        <td><?= h($provider->state_territory) ?></td>
                    </tr>

                    <tr>
                        <th>Contact Number</th>
                        <td><?= h($provider->phone_num) ?></td>
                    </tr>

                    <tr>
                        <th>Email Address</th>
                        <td><?= h($provider->email_address) ?></td>
                    </tr>

                    <tr>
                        <th>Placeright</th>
                        <td><?= h($provider->placeright_id) ?></td>
                    </tr>

                    <tr>
                        <th>Preferences</th>
                        <td><?= h($provider->preference) ?></td>
                    </tr>

                    </tbody>
                </table>

<!--                <td>--><?//= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provider->provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->name)]) ?><!--</td>-->
            </div>
            <div class="col-lg-2 ml-auto">

                <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $provider->provider_id]) ?></button>
                <button type="button" class="btn btn-outline-danger"><?= $this->Html->link(__('Delete'), ['action' => 'delete', $provider->provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->name)]) ?></button>
            </div>

        </div>
    </div>
</div>

</body>
</html>
