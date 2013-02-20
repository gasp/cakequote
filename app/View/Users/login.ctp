
<?php echo $this->Form->create('User');?>
<div><?php echo $this->Form->input('username');?></div>
<div><?php echo $this->Form->input('password');?></div>
<?php echo $this->Form->end('login'); ?>