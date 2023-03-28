<h4>Login Form</h4>
<?php $attribute=array('id'=>'login_form','class'=>'form_horizontal'); ?>
<?php echo form_open('users/login_view',$attribute); ?>

<div class="form-group">
    <?php echo form_label('username'); ?>
<?php    
$data=array(

    'class' => 'form-control',
    'name' => 'username',
    'placeholder' => 'Enter User Name'
   
);


?>
<?php echo form_input($data); ?>
</div>



<?php  echo form_close();?>
 