<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		admin| <?php echo $title_for_layout; ?>
	</title>
	<link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>">
	<?php echo $this->Html->script('less'); ?>
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
		<div id="header" class="admin">
			<h1>admin:<?php echo $this->Html->link('cakequote', '/'); ?></h1>
			<ul class="menu">
			<li><?php echo $this->Html->link("Utilisateurs",array('action'=>'index','controller'=>'users')); ?></li>
			<li><?php echo $this->Html->link("Quotes",array('action'=>'index','controller'=>'quotes')); ?></li>
			<li><?php echo $this->Html->link("Groupes",array('action'=>'index','controller'=>'groups')); ?></li>
			<li><?php echo $this->Html->link('Se déconnecter',array('controller'=>'users','action'=>'logout','admin'=>false)); ?></li>
			</ul>
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
