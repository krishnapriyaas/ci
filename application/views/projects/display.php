<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-xs-9">

<p class="bg-success">
	

<?php if($this->session->flashdata('mark_done')): ?>

<?php echo $this->session->flashdata('mark_done'); ?>

<?php endif; ?>


<?php if($this->session->flashdata('mark_undone')): ?>

<?php echo $this->session->flashdata('mark_undone'); ?>

<?php endif; ?>

</p>



<div class="panel panel-primary">
	<div class="panel-heading"><h4>Project Name: <?php echo $project_data->project_name; ?></h4></div>

	<div class="panel-body">
<p><strong>Date Created:</strong> <?php  echo $project_data->date_created; ?></p>

<h4>Description</h4>

<p><?php  echo $project_data->project_body; ?></p>

</div>
</div>

<ul class="list-group">
  <li class="list-group-item active">Project Action</li>
  <li class="list-group-item"><a href="<?php echo base_url();?>projects/create">Create Project</a></li>
  <li class="list-group-item"><a href="<?php echo base_url();?>projects/edit">Edit Project</a></li>
  <li class="list-group-item"><a href="<?php echo base_url();?>projects/delete">Delete Project</a></li>
 
</ul>
</body>
</html>

