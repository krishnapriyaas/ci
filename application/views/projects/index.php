<p class="bg-success">
<?php if($this->session->flashdata('login_success')):?>
<?php echo $this->session->flashdata('login_success');?> 
<?php endif; ?>
</p><p class="bg-danger">
<?php if($this->session->flashdata('no_access')):?>
<?php echo $this->session->flashdata('no_access');?> 
<?php endif; ?>
</p>