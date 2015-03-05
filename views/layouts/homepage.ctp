<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('amigosource:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		echo $this->Html->meta('icon',"/amigosource/img/amigosource.png", array('type' =>'icon'));
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('homepage');
		echo $this->Html->script('jquery-1.11.0');
		echo $this->Html->script('bootstrap.min');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div class="container-fluid">
		<!--
		<div id="a-Header" class="row">
			<div class="col-lg-6">Update Profile</div>
			<div class="col-lg-6 text-right">Administrator</div>
		</div>
		-->
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>

		</div>
	</div>
	<?php // echo $this->element('sql_dump'); 
	?>
</body>