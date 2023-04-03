<h1>PROJECTS</h1>
<table class='table table-hover'>

    <thead>
        <tr>
            <th> Project Name</th>
            <th> Project Body</th>
        </tr>


    </thead>
    <tbody>
        <?php foreach($projects as $project): ?>
            <tr>
            <?php echo "<td><a  href='".base_url()."projects/display'>". $project->project_name ."</a></td>"; ?> 
            <?php echo "<td>". $project->project_body ."</td>"; ?>   
           </tr>
        <?php endforeach; ?>

    </tbody>






</table>