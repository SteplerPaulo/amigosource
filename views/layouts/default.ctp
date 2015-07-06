<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.min');
		echo $this->Html->css('/bower_components/jquery-ui/themes/flick/jquery-ui.min');
		echo $this->Html->css('custom');
		echo $this->Html->css('ss/ssMetrics');
	?>
</head>
<body ng-app="AmigoApp">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
			<?php echo $this->Html->link($this->Html->image('amigosource.png',array('class'=>'logo')),'/',array('escape'=>false,'class'=>'navbar-brand','rel'=>'home','title'=>__(Configure::read('BrandName'), true))); ?>
		</div>
		<?php if($this->name=='Products' && $this->action=='search'):?>
			<form action="search" method="GET" class="navbar-form navbar-left search" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="q" value="<?php if(isset($_GET['q'])) echo $_GET['q'];?>" />
					<input type="hidden" name="type" value="<?php echo $type;?>"/>
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>
		<?php endif; ?>
		<?php if(!($this->name=='Businesses' && $this->action=='add')):?>
			<form class="navbar-form navbar-right" role="search">
					<div class="btn-group btn-group-sm">
						<?php if(!isset($_SESSION['Auth']['User'])):?>
						<?php echo $this->Html->link('Log in',array('controller'=>'users','action'=>'login'),array('class'=>'btn btn-default')); ?>
						<?php echo $this->Html->link('Register',array('controller'=>'businesses','action'=>'add'),array('class'=>'btn btn-primary')); ?>
						<?php else:?>
						<div class="btn btn-default"><?php echo($_SESSION['Auth']['User']['email']);?></div>
						<?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'),array('class'=>'btn btn-primary')); ?>
						<?php endif; ?>
					</div>
			</form>
		<?php else:?>
			
		<?php endif; ?>
	  </div>
	</nav>
	<div id="container" class="container-fluid">
		<div id="content" class="row">
			<?php $flash = $this->Session->flash(); ?>
			<?php if($flash):?>
				<div class="alert alert-info container">
					<?php echo $flash; ?>
				</div>
			<?php endif;?>
			<?php echo isset($_GET['compress'])?preg_replace('/^\s+|\n|\r|\s+$/m', '', $content_for_layout):$content_for_layout; ?>
		</div>
		
		<?php if($this->name!='Businesses'):?>
		<?php endif; ?>
	</div>
	<?php if(!isset($_SESSION['Auth']['User']) && !isset($_GET['access_code']) ):?>
	<footer class="navbar navbar-default navbar-static-bottom ">
		  <div class="container">
			<div id="footer" class="collapse navbar-collapse">
			 <ul class="nav navbar-nav ">
				<li><a href="#">Buyers</a></li>
				<li><a href="#">Suppliers</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			  <ul class="nav navbar-nav pull-right">
				<li><?php echo $this->Html->link(__(Configure::read('BrandName'), true), '/'); ?></li>
			  </ul>
			</div>
		  </div>
		</footer>
	<?php endif; ?>
	<?php
		echo $this->Html->script('/bower_components/angular/angular.min');
		echo $this->Html->script('/bower_components/jquery/dist/jquery.min');
		echo $this->Html->script('/bower_components/jquery-ui/jquery-ui.min');
		echo $this->Html->script('/bower_components/bootstrap/dist/js/bootstrap.min');
		echo $this->Html->script('admin');
		echo $this->Html->script(array('plugins/lightbox.min'));
	?>
	<script type="text/javascript">(function(){window.AmigoApp = angular.module('AmigoApp',[])})();</script>
	<script type="text/javascript">(function(){$(document).ready(function(){$('div.form-group>input,div.form-group>select,div.form-group>textarea').addClass('form-control');});})();</script>
	<?php  echo $scripts_for_layout; ?>
</body>
</html>