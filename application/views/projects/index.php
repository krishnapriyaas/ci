

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
<p class="bg-success">
	

<?php if($this->session->flashdata('project_created')): ?>

<?php echo $this->session->flashdata('project_created'); ?>

<?php endif; ?>

<?php if($this->session->flashdata('project_updated')): ?>

<?php echo $this->session->flashdata('project_updated'); ?>

<?php endif; ?>



<?php if($this->session->flashdata('project_deleted')): ?>

<?php echo $this->session->flashdata('project_deleted'); ?>

<?php endif; ?>


<div class="panel panel-success">


	<div class="panel-heading"><h3>Projects</h3></div>

	<div class="panel-body">

	<ul class="list-group">
	
		<?php foreach($projects as $project): ?>

		<li class='list-group-item'>

		<div class=''>


		<?php echo "<a  href='". base_url() ."projects/display/". $project->id ."'>" . $project->project_name . "</a>"; ?>

		</div>

		<!-- <div class="">

			<a class="btn btn-danger " href="<?php echo base_url();?>projects/delete/<?php echo $project->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>
			

		</div> -->

		</li>




	   <?php endforeach; ?>

	
	
	</ul>

<a class="btn btn-primary pull-right" href="<?php echo base_url();?>projects/create">Create Project</a>

</div>

</div> <!-- ENd of panel-->


