
<html>
<head>
<?= $this->Html->script('fullcalendar-init.js'); ?>
    <?= $this->Html->css('style2.css'); ?>
    <?= $this->Html->css('fullcalendar.min.css') ?>


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

    <style>
        .fc-title {color: white;}
    </style>


</head>

<body>
    <!--**********************************
        Content body start
    ***********************************-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Calendar</h4>
                                <div class="col-lg-3 mt-3">
                                    <a href="#" data-toggle="modal" data-target="#add-event" class="btn btn-primary btn-block"><i class="ti-plus f-s-12 m-r-5"></i> Create New Event</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box m-b-50">
                                        <div id="calendar"></div>
                                    </div>
                                </div>

                                <!-- end col -->
                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong>Edit Event</strong></h4>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-success edit-event waves-effect waves-light" data-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-event">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <?= $this->Form->create('') ?>
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong>Add an event</strong></h4>
                                            </div>
                                            <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="control-label">Event Title</label>
                                                            <input class="form-control form-white" placeholder="Enter title" type="text" name="title">
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label class="control-label">Description</label>
                                                            <input class="form-control form-white" placeholder="Enter description" type="text" name="description">
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label class="control-label">Start - End Date</label>
                                                            <div class="input-daterange input-group" id="date-range" style="padding-bottom: 30px;" >
                                                                <?php echo $this->Form->text('start_date', ['label'=> '', 'class'=> 'form-control',  'placeholder'=>'dd/mm/yyyy']);?>
                                                                <span class="input-group-addon">to</span>
                                                                <?php echo $this->Form->text('end_date', ['label'=> '', 'class'=> 'form-control', 'placeholder'=>'dd/mm/yyyy']);?>
                                                            </div>

                                                            <label class="control-label">Start - End Time</label>
                                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                            <?php echo $this->Form->text('start_time', ['label'=> '', 'class'=> 'form-control', 'value'=>'13:14']);?>
                                                            <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                            <span class="input-group-addon">to</span>
                                                            <?php echo $this->Form->text('end_time', ['label'=> '', 'class'=> 'form-control', 'value'=>'13:14']);?>
                                                               <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12 input-group">
                                                            <label class="control-label">Reminder Date</label>
                                                            <?php echo $this->Form->text('reminder', ['label'=> '', 'class'=> 'form-control', 'id'=>'datepicker-autoclose', 'placeholder'=>'dd/mm/yyyy']);?>
                                                            <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label class="control-label">Category</label>
                                                            <input class="form-control form-white" placeholder="Enter description" type="text" name="category">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="color_label">
                                                                <option value="success">Red</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="pink">Pink</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <?= $this->Form->button('Save',['class'=>'btn btn-danger waves-effect waves-light save-category']) ?>

                                            </div>
                                            <?= $this->Form->end() ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

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

