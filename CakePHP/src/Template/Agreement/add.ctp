<html>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agreement $agreement
 */
?>
<head>
    <?= $this->Html->css('bootstrap-material-datetimepicker.css') ?>
    <!-- Page plugins css -->
    <?= $this->Html->css('jquery-clockpicker.min.css') ?>
    <!-- Color picker plugins css -->
    <?= $this->Html->css('asColorPicker.css') ?>
    <!-- Date picker plugins css -->
    <?= $this->Html->css('bootstrap-datepicker.min.css') ?>
    <!-- Daterange picker plugins css -->
    <?= $this->Html->css('bootstrap-timepicker.min.css') ?>
    <?= $this->Html->css('daterangepicker.css') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>
</head>

<body>
    <h1>Add New Agreement</h1>
    <?= $this->Form->create($agreement) ?>



    <div class="content-body">
        <!-- row -->



        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="val-username">Provider<span class="text-danger">*</span>
                                        </label>

                                        <div class="col-lg-6">
                                            <?php echo $this->Form->control('provider_id', ['label'=>'','id'=>'val-username', 'class'=>'form-control', 'options' => $provider , '' => true, 'required'=> true, 'empty' => 'Please Select','style'=>'width:400px']); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="val-member">Member <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <?php echo $this->Form->control('member_id', ['label'=>'','id'=>'val-member','class' => 'form-control','options' => $placementMember, '' => true, 'required'=> true, 'empty' => 'Please Select', 'style'=>'width:400px']);?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="status">Progress <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">

                                            <?php
                                            $options = array();
                                            $options["Not Started"] = 'Not Started';
                                            $options["In progress"] = 'In progress';
                                            $options["Completed"] = 'Completed';
                                            $options["Due"] = 'Due';
                                            ?>

                                                <div class="col-xs-3"><?= $this->Form->control('status', ['options' => $options, 'empty' => 'Please Select' ,'required' => true,'class'=>'form-control', 'label' => '','style'=>'width:300px']) ?></div>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="reminder">Reminder </label>

                                        <div class="input-group">
                                        <?php echo $this->Form->text('reminder', ['label'=> '', 'class'=> 'form-control', 'id'=>'datepicker-autoclose', 'placeholder'=>'mm/dd/yyyy']);?>
                                             <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="date"> Agreement Contract Date </label>
                                        <div class="input-daterange input-group" id="date-range" style="padding-bottom: 30px;" >
                                        <?php echo $this->Form->text('start_date', ['label'=> '', 'class'=> 'form-control',  'placeholder'=>'mm/dd/yyyy']);?>
                                            <span class="input-group-addon">to</span>
                                            <?php echo $this->Form->text('end_date', ['label'=> '', 'class'=> 'form-control', 'placeholder'=>'mm/dd/yyyy']);?>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="comment">Comment / Note</label>
                                        <div class="col-lg-6" style="padding-bottom: 30px;">
                                            <?php echo $this->Form->textarea('comment',['class'=>'form-control', 'id'=>'comment','row'=>'10']);?>
<!--                                            <td>--><?php //echo $this->Form->control('comment', ['type' => 'comment']);  ?><!--</td>-->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                        <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
                                            <!-- <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button> -->
                                            <button type="button" class="btn btn-outline-secondary" onClick="document.location.href='https://monashplacementsystem.u20s2129.monash-ie.me/agreement';">Cancel</button>

                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <?= $this->Form->end() ?>
    <!--**********************************
        Content body end
    ***********************************-->




<?= $this->Html->script('common.min.js'); ?>
<?= $this->Html->script('custom.min.js'); ?>
<?= $this->Html->script('settings.js'); ?>
<?= $this->Html->script('gleek.js'); ?>

<?= $this->Html->script('moment.js'); ?>
<?= $this->Html->script('bootstrap-material-datetimepicker.js'); ?>
<!-- Clock Plugin JavaScript -->
<?= $this->Html->script('jquery-clockpicker.min.js'); ?>
<!-- Color Picker Plugin JavaScript -->
<?= $this->Html->script('jquery-asColor.js'); ?>
<?= $this->Html->script('jquery-asGradient.js'); ?>
<?= $this->Html->script('jquery-asColorPicker.min.js'); ?>
<!-- Date Picker Plugin JavaScript -->
<?= $this->Html->script('bootstrap-datepicker.min.js'); ?>
<!-- Date range Plugin JavaScript -->
<?= $this->Html->script('bootstrap-timepicker.min.js'); ?>
<?= $this->Html->script('daterangepicker.js'); ?>

<?= $this->Html->script('form-pickers-init.js'); ?>

</body>
</html>
