<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		admin| <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<h2>
				<?php if ($me['id']>0): ?>
					<div><?php echo $this->Html->link('logout', '/users/logout'); ?></div>
				<?php else: ?>
					<div><?php echo $this->Html->link('login', '/users/login'); ?></div>
				<?php endif; ?>
			</h2>
		<div id="header" class="admin">
			<h1>admin:<?php echo $this->Html->link('cakequote', '/'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			coded with love
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
