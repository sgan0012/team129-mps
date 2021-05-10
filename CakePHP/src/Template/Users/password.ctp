<?php
?>
<html>
<head>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>
</head>
<body>
<h1>Forget Password?</h1>
<!--<h2 class="text-center" style="margin-bottom:30px;color:white">Forgot Password?</h2>-->

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                            <a class="text-center" onclick="document.location.href='https://monashplacementsystem.u20s2129.monash-ie.me'"> <h3 style="padding-bottom: 30px;">Monash Placement System</h3> </a>

                        
                                <p style="color:#000000;">Enter your email-address. You will receive an email with a link to reset your password.</p>
                                <?= $this->Form->create(
                                 null,
                                [
                                'id' => 'forgotpwd-form',
                                'url' => [
                                'controller' => 'Users',
                                'action' => 'password',
                                '?' => [
                                'redirect' => $this->request->getQuery('redirect')
                                ]
                                ]
                                ]); ?>

                                <form class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                    <?= $this->Form->control('email',['label' => false,'class' => 'form-control','placeholder' => 'Email']); ?>
                                    </div>
                                    <?= $this->Form->button('Submit',['class' => 'btn btn-primary btn-flat m-b-15']); ?>
                                </form>
                                    <?= $this->Form->end(); ?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

