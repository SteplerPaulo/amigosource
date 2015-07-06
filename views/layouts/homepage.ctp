<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>
		<?php __(Configure::read('BrandName')); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.min');
		echo $this->Html->css('custom');
	?>
</head>
<body ng-app="AmigoApp" class="home">
	<div class="background"></div>
	<div class="gradient"></div>
	<div id="container" class="container">
		<header class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="col-xs-12">
					<?php if(!isset($_SESSION['Auth']['User'])):?>
					<?php echo $this->Html->link('Log in',array('controller'=>'users','action'=>'login'),array('class'=>'btn btn-primary navbar-btn navbar-right btn-sm')); ?>
					<?php else:?>
					<div class="btn-group btn-group-sm  navbar-btn navbar-right ">
					<div class="btn btn-default"><?php echo($_SESSION['Auth']['User']['email']);?></div>
					<?php echo $this->Html->link('Log out',array('controller'=>'users','action'=>'logout'),array('class'=>'btn btn-primary')); ?>
					</div>
					<?php endif;?>
				</div>
			</div>
		</header>
		<div id="content" class="row">
			<?php echo $content_for_layout; ?>
		</div>
		<footer class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><?php echo $this->Html->link(__(Configure::read('BrandName'), true), '/'); ?></li>
					</ul>
					<ul class="nav navbar-nav ">
						<li><a href="#">Buyers</a></li>
						<li><a href="#">Suppliers</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	<?php
		echo $this->Html->script('/bower_components/angular/angular.min');
		echo $this->Html->script('/bower_components/jquery/dist/jquery.min');
		echo $this->Html->script('/bower_components/bootstrap/dist/js/bootstrap.min');
	?>
	<script type="text/javascript">(function(){window.AmigoApp = angular.module('AmigoApp',[])})();</script>
	<script type="text/javascript">$(document).ready(function(){$('div.background').addClass('animate');});</script>
	<?php echo $scripts_for_layout; ?>
</body>
</html>