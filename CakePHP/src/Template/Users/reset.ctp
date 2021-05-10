<?php
?>

<p class="text-center" style="margin-bottom:30px">Please enter your new password</p>
<?php echo $this->Form->create($users,array('onsubmit' => 'return check(password,confirm_password);')); ?>

<div class="form-group">
    <?= $this->Form->control('password',['label' => false, 'required' => true, 'autofocus' => true, 'class' => 'form-control', 'placeholder' => 'New password']); ?>
    
</div>
<div class="form-group">
    <?= $this->Form->control('confirm_password',['label' => false, 'type' => 'password', 'required' => true, 'class' => 'form-control', 'placeholder' => 'Retype new password']); ?>
</div>
<?= $this->Form->button('Submit',['class' => 'btn btn-primary btn-flat m-b-15']); ?>
<?= $this->Form->end(); ?>




<script type="text/javascript">
    function check(password1,password2)
    {

        if(password1.value==password2.value)
        {

            return true;
        }
        else{
            alert("your password and confirm password is not same.");
            return false;
        }
    }
</script>