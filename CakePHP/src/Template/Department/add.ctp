<html>
<head>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>
</head>
<body>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>


<h1>Add New Department</h1>

<div class="content-body">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <?= $this->Form->create($department) ?>


                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="name">Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <?php echo $this->Form->text('name',['label'=>'','class' => "form-control" ,'placeholder'=> 'Please enter the department name',  'id'=> 'name']);?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="faculty_id" style="padding-top: 40px;">Faculty<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <?php echo $this->Form->control('faculty_id',['options'=>$faculty,'label'=>'' , 'empty' => "Please Select" ,'class' => "form-control",  'id'=> 'department_id', 'style'=>'width:450px;']);?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto" style="padding-top: 30px;">
                                    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
                                        <button type="button" class="btn btn-outline-secondary"onClick="document.location.href='https://monashplacementsystem.u20s2129.monash-ie.me/department';">Cancel</button>


                                    </div>
                                </div>
                                <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
