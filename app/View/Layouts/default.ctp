<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="<?php echo $this->Html->url('/css/bootstrap.css'); ?>">
	
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
</head>
<body>
	
	<div class="container">
		<div class="navbar-inner">
		<div id="header" class="span9">
			
			<?php echo $this->element('menu/top_menu'); ?>
			
		</div>
	</div>
		<div id="content">
			
			

			<?php echo $this->Session->flash(); ?>


			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			coded with love
		</div>
	</div>
	
</body>
<script src="http://code.jquery.com/jquery.js"></script>
    <?php echo $this->Html->script('bootstrap'); ?>
    <?php echo $scripts_for_layout;?>
</html>
