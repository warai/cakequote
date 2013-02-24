<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		admin| <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div class="navbar-inner">
		<div id="header" class="span9">
			
			<?php echo $this->element('menu/top_menu_admin'); ?>
			
		</div>
	</div>
	
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Jean-Edouard Sastre<br/> IIM A2 Web
			<?php echo $this->element('sql_dump'); ?>
		</div>
	</div>
	
</body>
<script src="http://code.jquery.com/jquery.js"></script>
    <?php echo $this->Html->script('bootstrap'); ?>
    <?php echo $scripts_for_layout;?>
</html>
