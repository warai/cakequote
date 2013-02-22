<?php $current_page = strtolower($this->viewPath); ?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav pull-right connect">
				<li class="divider-vertical"></li>
			
				<?php if($me['id'] != 0) :?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $me['username']; ?>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						

						<li>
							<?php echo $this->Html->link('Profile', array('controller'=>'users','action' => 'view/ '.$me['id'] )); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Edit', array('controller'=>'users','action' => 'edit/ '.$me['id'] )); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Logout', array('controller'=>'users','action' => 'logout' )); ?>
						</li>
					</ul>
				</li>
				<?php else: ?>

					<li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
					<li class="divider-vertical"></li>
					<li><?php echo $this->Html->link('Signup', array('controller' => 'users', 'action' => 'add')); ?></li>
				
				<?php endif; ?>
		</ul>
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('Jap Life', '/', array('class'=>'brand')); ?>
			<div class="nav-collapse">
				<ul class="nav">
					<li <?php if($current_page=="accueil"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Accueil', '/'); ?>
					</li>
					<li <?php if($current_page=="quotes"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Coutumes', array('controller' => 'quotes', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="users"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Membres', array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					
					<li><?php echo $this->Html->link(__('Ajouter une coutume'), array('action' => 'add')); ?></li>


					<li <?php if($current_page=="admin"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Administration', array('controller' => 'admin', 'action' => 'users')); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>