<?php
include("csv.php");
$csv = new csv();
if ( isset($_POST['sub'])){
    $csv->import($_FILES['file']['tmp_name']);
}
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider[]|\Cake\Collection\CollectionInterface $provider
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


    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                columnDefs: [
                    { orderable: false, targets: -1 }
                ]
            });
        } );

    </script>
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
                        <h4 class="card-title">Provider</h4>

                        <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18"></i> Attachment</h5>
                        <form method ="post" enctype="multipart/form-data">
                            <div class="form-group" >
                                <div class="fallback">
                                    <input class="l-border-1" name="file" type="file" accept=".csv" multiple="multiple">
                                    <button type="submit" name="sub" value="Import" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        <form>

                        <div class="table-responsive">

                            <table id="table" class="table table-striped table-bordered zero-configuration" style="width:100%; left:0;" >
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>ABN</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <?php foreach($provider as $provider): ?>
                                    <tr>
                                        <td><?= h($provider->name) ?></td>
                                        <td><?= h($provider->abn) ?></td>
                                        <td><?= h($provider->email_address) ?></td>
                                        <td><?= h($provider->phone_num) ?></td>
                                        <!--                                            <td><span>s-->
                                        <td class="actions">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('View'), ['action' => 'view', $provider->provider_id,'data-toggle'=>'tooltip','data-placement'=>'top']) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $provider->provider_id]) ?>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-close color-danger"></i>
                                                <?= $this->Html->link(__('Delete'), ['action' => 'delete', $provider->provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->name)]) ?>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>ABN</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
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
    $("#table").DataTable({
        "lengthMenu": [ [10, 15, 25, 50, 100, -1], [10, 15, 25, 50, 100, "All"] ],
        "iDisplayLength": 300,
        bInfo: false,
        responsive: true,
        "bAutoWidth": false
    });
</script>
</html>

