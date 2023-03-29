<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p class="bg-success">
<?php if($this->session->flashdata('login success')):?>
<?php echo $this->session->flashdata('login success');?> 
<?php endif; ?>
</p>  
<p class="bg-danger">
<?php if($this->session->flashdata('login failed')):?>
<?php echo $this->session->flashdata('login failed');?> 
<?php endif; ?>
</p> 
</body>
</html>
