<h1>Register</h1>
<?php $attribute = array('id' => 'register_form' , 'class' => 'form_horizontal'); ?>
<?php  if($this->session->flashdata('errors')): ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif; ?>
<?php echo form_open('users/register',$attribute);?>
<div class="form-group">

<?php echo form_label('First Name');?>
<?php 

    $data = array(
    'class' => 'form-control',
    'name' => 'first_name',
    'placeholder' => 'Enter FirstName'
    );
?>
<?php echo form_input($data);?>
</div>
<div class="form-group">

<?php echo form_label('Last_Name');?>
<?php 

    $data = array(
    'class' => 'form-control',
    'name' => 'last_name',
    'placeholder' => 'Enter lastname'
    );
?>
<?php echo form_input($data);?>
</div>
<?php echo form_label('Email');?>
<?php 

    $data = array(
    'class' => 'form-control',
    'name' => 'email',
    'placeholder' => 'Enter Your Email'
    );
?>
<?php echo form_input($data);?>
</div>
<div class="form-group">

<?php echo form_label('Username');?>
<?php 

    $data = array(
    'class' => 'form-control',
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
    'class' => 'form-control',
    'name' => 'password',
    'placeholder' => 'Enter password'
    );
?>
<?php echo form_password($data);?>
</div>

<div class="form-group">

<?php echo form_label('Confirm Password');?>


<?php 

    $data = array(
    'class' => 'form-control',
    'name' => 'confirm_password',
    'placeholder' => 'Confirm password'
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