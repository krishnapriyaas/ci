

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
<p class="bg-danger">
<?php if($this->session->flashdata('no_access')):?>
<?php echo $this->session->flashdata('no_access');?> 
<?php endif; ?>
</p> 
<h1>PROJECTS</h1>
<table class='table table-hover'>

    <thead>
    <a class="btn btn-primary btn-lg float-right" href="<?php echo base_url();?>projects/create">Create Projects</a>
        <tr>
            <th> Project Name</th>
            <th> Project Body</th>
        </tr>


    </thead>
    <tbody>
        <?php foreach($projects as $project): ?>
            <tr>
            <?php echo "<td><a  href='".base_url()."projects/display/".$project->id."'>". $project->project_name ."</a></td>"; ?> 
            <?php echo "<td>". $project->project_body ."</td>"; ?>   
           </tr>
        <?php endforeach; ?>

    </tbody>






</table>
        </body>