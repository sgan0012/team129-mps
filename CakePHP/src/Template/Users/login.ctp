<html>
<head>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>
</head>
<body>

<h1>Login</h1>

<div class="content-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <?= $this->Form->create() ?>

                                <a class="text-center" onclick="document.location.href='https://monashplacementsystem.u20s2129.monash-ie.me'"> <h3 style="padding-bottom: 30px;">Monash Placement System</h3> </a>

                                <form class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <?php echo $this->Form->text('email', ['class'=>'form-control', 'type'=>'email', 'placeholder'=>'Email']);?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $this->Form->text('password', ['class'=>'form-control', 'type'=>'password', 'placeholder'=>'Password']);?>
                                    </div>
                                    <?= $this->Form->button('Login', ['class' =>'btn login-form__btn submit w-100', 'style' => 'margin-bottom: 30px;']) ?>

                                </form>
                                <?= $this->Html->link(__('New user'), ['action' => 'add']) ?>
                                <br>
                                <?= $this->Html->link('Forgot Password?',['controller' => 'Users', 'action' => 'password'],['tabindex' => '3']); ?>

                            </div>

<!--                                <div class="form-group row">-->
<!--                                    <div class="col-lg-6">-->
<!--                                        --><?//= $this->Form->control('email') ?>
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="form-group row">-->
<!--                                    <div class="col-lg-6">-->
<!--                                         --><?//= $this->Form->control('password') ?>
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!---->
<!--                                 <div class="col-lg-8 ml-auto">-->
<!--                                    --><?//= $this->Form->button('Login') ?>
<!--                                 </div>-->
<!---->
<!--                                 --><?//= $this->Html->link(__('New user'), ['action' => 'add']) ?>
<!--                                 <br>-->
<!--                                 --><?//= $this->Html->link('Forgot Password?',['controller' => 'Users', 'action' => 'password'],['tabindex' => '3']); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->Form->end() ?>


</body>
</html>
