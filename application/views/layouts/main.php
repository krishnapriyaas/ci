<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="<?php  echo base_url();?>assets/css/bootstrap.min.css"><!--attach css file in bootstrap-->
    <script src="<?php  echo base_url();?>assets/js/bootstrap.min.js"></script><!--attach js file in bootstrap-->
    <script src="<?php  echo base_url();?>assets/js/jquery.js"></script>
</head>
<body>
    <div class="container">
            <div class="class-xs-3">

            </div>
            <div class="class-xs-9">
                <?php $this->load->view($main_view);?>
            </div>
    </div>
</body>
</html>