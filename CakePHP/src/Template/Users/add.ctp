<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
//?>
<html>
<head>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>
</head>
<body>

<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Users'), ['action' => 'index']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user,['onsubmit'=>'return checkEmail();']) ?>
<h1>Add New User</h1>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                    <div class="form-group">

                                        <a class="text-center" onclick="document.location.href='https://monashplacementsystem.u20s2129.monash-ie.me'"> <h3 style="padding-bottom: 30px;">Monash Placement System</h3> </a>

                                        <?php echo $this->Form->text('email', ['id' => 'email','class'=>'form-control', 'type'=>'email', 'placeholder'=>'Email']);?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo $this->Form->text('password', ['class'=>'form-control', 'type'=>'password', 'placeholder'=>'Password']);?>
                                    </div>
                                    <?= $this->Form->button(__('Submit'), ['class' =>'btn login-form__btn submit w-100', 'style' => 'margin-bottom: 30px;']) ?>
                            </div>

<!--                                <fieldset>-->
<!--                                        <div class="form-group row">-->
<!--                                            <div class="col-lg-6">-->
<!--                                            --><?php //echo $this->Form->control('email',["id"=>"email"]); ?>
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!---->
<!--                                        <div class="form-group row">-->
<!--                                            <div class="col-lg-6">-->
<!--                                                --><?php //echo $this->Form->control('password'); ?>
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                </fieldset>-->
<!--                                    <div class="col-lg-8 ml-auto">-->
<!--                                        --><?//= $this->Form->button(__('Submit')) ?>
<!--                                    </div>-->
                                <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script>
    function checkEmail(){
        let email=document.getElementById("email").value;
        if(email.endsWith('monash.edu')){
            return true;
        }else{
            alert("the email must end with 'monash.edu'");
            return false;
        }


    }
</script>
