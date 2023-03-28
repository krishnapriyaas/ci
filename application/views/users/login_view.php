<h4>Login Form</h4>
<?php $attribute = array('id' => 'login_form' , 'class' => 'form_horizontal'); ?>
<?php echo form_open('users/login',$attribute);?>

<div class="form-group">

<?php echo form_label('Username');?>


<?php 

    $data = array(
    'class' => 'form_control',
    'name' => 'username',
    'placeholder' => 'Enter username'
    );
?>
<?php echo form_input($data);?>
</div>

<div class="form-group">

<?php echo form_label('Password');?>


<?php 

    $data = array(
    'class' => 'form_control',
    'name' => 'password',
    'placeholder' => 'Enter password'
    );
?>
<?php echo form_password($data);?>
</div>

<div class="form-group">

<?php 

    $data = array(
    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Login'
    );
?>
<?php echo form_submit($data);?>
</div>

<?php echo form_close();?>