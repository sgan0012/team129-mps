<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <?php echo $this->Html->link(
                    '<div class="card-body">
                                <h3 class="card-title text-white">Active Agreement</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">' . $AgreementNum . '</h2>
                                </div>
                                <span class="float-right display-4 opacity-5"><i class="fa fa-handshake-o" style="color:white;"></i></span>
                            </div>',
                    array('controller' => 'Agreement', 'action' => 'index'),
                    ['escape' => false]
                ); ?>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-2">
                <?php echo $this->Html->link(
                    '<div class="card-body">
                                <h3 class="card-title text-white">Active Schedule</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">' . $ScheduleNum . '</h2>
                                </div>
                                <span class="float-right display-4 opacity-5"><i class="fa fa-file-o" style="color:white;"></i></span>
                            </div>',
                    array('controller' => 'Schedule', 'action' => 'index'),
                    ['escape' => false]
                ); ?>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <?php echo $this->Html->link(
                    '<div class="card-body">
                                <h3 class="card-title text-white">Total Schedule</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">' . $scheduleTotalNum . '</h2>
                                </div>
                                <span class="float-right display-4 opacity-5"><i class="fa fa-file-o" style="color:white;"></i></span>
                            </div>',
                    array('controller' => 'Schedule', 'action' => 'index'),
                    ['escape' => false]
                ); ?>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <?php echo $this->Html->link(
                    '<div class="card-body">
                                <h3 class="card-title text-white">Total Provider</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">' . $providerNum . '</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users" style="color: white;"></i></span>
                            </div>',
                    array('controller' => 'Provider', 'action' => 'index'),
                    ['escape' => false]
                ); ?>

            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="card card-widget" style="height:390px;">
                <div class="card-body">
                    <h5 class="text-muted" style="text-align:left">Agreement Overview</h5>
                    <div class="mt-4">
                        <h6 style="text-align:left">Not Started <span class="pull-right"><?php echo $notStartAgreement; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar " style="width: <?php echo ($notStartAgreement / $allAgreement) * 100; ?>%;background-color:#a6a6a6" role="progressbar"><span class="sr-only"><?php echo ($notStartAgreement / $allAgreement) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 style="text-align:left">OnGoing <span class="pull-right"><?php echo $AgreementNum; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar" style="width: <?php echo ($AgreementNum / $allAgreement) * 100; ?>%;background-color:#f5ff00;" role="progressbar"><span class="sr-only"><?php echo ($AgreementNum / $allAgreement) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 style="text-align:left">Completed<span class="pull-right"><?php echo $CompletedAgreement; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar" style="width: <?php echo ($CompletedAgreement / $allAgreement) * 100; ?>%;background-color:#1EB318;" role="progressbar"><span class="sr-only"><?php echo ($CompletedAgreement / $allAgreement) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 style="text-align:left">Due<span class="pull-right"><?php echo $DueAgreement; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar " style="width: <?php echo ($DueAgreement / $allAgreement) * 100; ?>%;background-color:#FF5A5A;" role="progressbar"><span class="sr-only"><?php echo ($DueAgreement / $allAgreement) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-widget" style="height:390px;">
                <div class="card-body">
                    <h5 class="text-muted" style="text-align:left">Schedule Overview</h5>
                    <div class="mt-4">
                        <h6 style="text-align:left">Not Started<span class="pull-right"><?php echo $notStartSchedule; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar" style="width: <?php echo ($notStartSchedule / $allSchedule) * 100; ?>%;background-color:#a6a6a6" role="progressbar"><span class="sr-only"><?php echo ($notStartSchedule / $allSchedule) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 style="text-align:left">OnGoing<span class="pull-right"><?php echo $ScheduleNum; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar" style="width: <?php echo ($ScheduleNum / $allSchedule) * 100; ?>%;background-color:#f5ff00" role="progressbar"><span class="sr-only"><?php echo ($ScheduleNum / $allSchedule) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 style="text-align:left">Completed<span class="pull-right"><?php echo $CompletedSchedule; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar" style="width: <?php echo ($CompletedSchedule / $allSchedule) * 100; ?>%;background-color:#1EB318" role="progressbar"><span class="sr-only"><?php echo ($CompletedSchedule / $allSchedule) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 style="text-align:left">Due<span class="pull-right"><?php echo $DueASchedule; ?></span></h6>
                        <div class="progress mb-3" style="height: 12px">
                            <div class="progress-bar" style="width: <?php echo ($DueASchedule / $allSchedule) * 100; ?>%;background-color:#FF5A5A" role="progressbar"><span class="sr-only"><?php echo ($DueASchedule / $allSchedule) * 100; ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<!---->
<!--        <div class="col-lg-3 col-md-6">-->
<!--            <div class="card" style="min-width:800px;">-->
<!--                <div class="card-body">-->
<!--                    <h4 class="card-title px-4 mb-3">Todo</h4>-->
<!--                    <div class="todo-list">-->
<!--                        <div class="tdl-holder">-->
<!--                            <div class="tdl-content">-->
<!--                                <ul id="todo_list">-->
<!--                                    <li><label><input type="checkbox"><i></i><span>Meeting at 930am</span><a href='#' class="ti-trash"></a></label></li>-->
<!--                                    <li><label><input type="checkbox" checked><i></i><span>Prepare Agenda for tomorrow</span><a href='#' class="ti-trash"></a></label></li>-->
<!--                                    <li><label><input type="checkbox"><i></i><span>Check for overdue schedules</span><a href='#' class="ti-trash"></a></label></li>-->
<!--                                    <li><label><input type="checkbox" checked><i></i><span>Import new providers</span><a href='#' class="ti-trash"></a></label></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="px-4">-->
<!--                                <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>

