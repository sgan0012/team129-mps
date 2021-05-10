<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider $provider
 */
?>
<html>

<head>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>


    <!--**********************************
    Scripts
***********************************-->
    <?= $this->Html->script('common.min.js'); ?>
    <?= $this->Html->script('custom.min.js'); ?>
    <?= $this->Html->script('settings.js'); ?>
    <?= $this->Html->script('gleek.js'); ?>
    <?= $this->Html->script('styleSwitcher.js'); ?>
    <?= $this->Html->script('jquery.validate-init.js'); ?>
    <?= $this->Html->script('jquery.validate.min.js'); ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

</head>

<body>
<h2>Add New Provider</h2>

<div class="content-body">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <?= $this->Form->create($provider) ?>

                            <!--**********************************
                                Form starts
                            ***********************************-->
                            <form class="form-valide" action="#" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <?php echo $this->Form->text('name',['required'=>true,'label'=>'','class' => "form-control" ,'placeholder'=> 'Please enter the name of the provider',  'id'=> 'val-username']);?>
                                        <!--                                        <input type="text" class="form-control" id="val-username" name="name" placeholder="Please enter the provider's name.">-->
                                    </div>



                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email" >Email Address<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <?php echo $this->Form->text('email_address', ['required' => true,'label'=>'', 'type' => 'email', 'class'=>'form-control', 'id'=>'val-email','placeholder' => 'abc@mail.com']);?>
                                        <!--                                        <input type="text" class="form-control" id="val-email" name="email_address" placeholder="abc@mail.com">-->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="contact_abn_no">ABN<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <?php echo $this->Form->text('abn', ['required' => true, 'label' => '', 'class'=>'form-control', 'id'=>'contact_abn_no', 'placeholder'=>'Please enter a valid abn']);?>
                                        <!--                                        <input type="text" class="form-control" id="contact_abn_no" name="abn" placeholder="Please enter a valid ABN.">-->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="phone_num">Phone Number</label>
                                    <div class="col-lg-6">
                                        <?php echo $this->Form->text('phone_num', ['label' => '','class'=>'form-control', 'id' => 'phone_num', 'style' => 'width: 350px']);?>
                                        <!--                                        <input type="text" class="form-control" id="phone_num" name="phone_num">-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" >Address</label>
                                    <?php echo $this->Form->text('address', ['label'=> '', 'class'=> 'form-control', 'id'=>'address', 'placeholder'=>'1234 Main St']);?>
                                    <!--                                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">-->
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="city">City</label>
                                        <?php echo $this->Form->text('city', ['class'=>'form-control', 'id'=>'city', 'placeholder'=>'Melbourne']);?>
                                        <!--                                        <input type="text" class="form-control" name="city" id="city">-->
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputstate" >State or territory</label>

                                        <?php echo $this->Form->select(
                                            'state_territory',
                                            ['VIC', 'ACT', 'NSW', 'NT', 'QLD', 'SA', 'TAS', 'WA'],
                                            ['empty' => 'Select','class' => 'form-control', 'id' => 'inputstate']
                                        ); ?>

                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="suburb" >Suburb</label>

                                        <?php echo $this->Form->text('suburb',['class'=>'form-control', 'id'=>'suburb', 'placeholder'=>'e.g. 3000']);?>
                                        <!--                                        <input type="text" class="form-control" id="suburb" name="suburb">-->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="placeright_id">Placeright</label>
                                    <div class="col-lg-6">
                                        <?php echo $this->Form->text('placeright',['class'=>'form-control', 'id'=>'placeright_id']);?>
                                        <!--                                        <input type="text" class="form-control" name="placeright_id" id="placeright_id">-->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="preferences">Preferences</label>
                                    <div class="col-lg-6" style="padding-bottom: 30px;">
                                        <?php echo $this->Form->textarea('preference',['class'=>'form-control', 'id'=>'preferences','row'=>'5']);?>
                                        <!--                                        <textarea class="form-control" id="preferences" name="preference" rows="5"></textarea>-->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-outline-secondary"onClick="document.location.href='https://monashplacementsystem.u20s2129.monash-ie.me/provider';">Cancel</button>
                                        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Form validation JS
***********************************-->

<script>
    $(".form-valide").validate({ignore:[],errorClass:"invalid-feedback animated fadeInDown",errorElement:"div",errorPlacement:function(e,a){jQuery(a).parents(".form-group > div").append(e)},highlight:function(e){jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")},success:function(e){jQuery(e).closest(".form-group").removeClass("is-invalid"),jQuery(e).remove()},rules:{"name":{required:!0,minlength:3},"email_address":{required:!0,email:!0},"abn":{required:!0,number:!0},"val-suggestions":{required:!0,minlength:5},"phone_num":{number:!0},"suburb":{number:!0}},messages:{"name":{required:"Please enter the provider's name",minlength:"Name must consist of at least 3 characters"},"email_address":"Please enter a valid email address","abn":{required:"Please enter a valid ABN",number:"Please enter numbers only."},"val-suggestions":"What can we do to become better?","phone_num":"Please enter number only!","suburb":"Please enter a valid postcode!"}});
</script>

</body>
</html>
