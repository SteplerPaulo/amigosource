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
		echo $this->Html->css('amigosource');
		echo $this->Html->css('slide-2');
		//echo $this->Html->css('font-awesome-4.1.0/css/font-awesome'); //Custom Fonts
		echo $this->Html->css('admin');
		echo $this->Html->css('ss/ssMetrics');
		echo $this->Html->css('datepicker');
		echo $this->Html->css('plugins/wizard'); //Custom CSS
		
		echo $this->Html->script('jquery-1.11.0');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('admin');
		echo $this->Html->script('slug');
		echo $this->Html->script('bootstrap-datepicker');
		echo $this->Html->script(array('ui/uiInputNumeric'));
		//ANGULAR JS
		echo $this->Html->script(array('angular'));	
		echo $this->Html->script(array('angular-route'));
		//
		echo $this->Html->script(array('biz/registration/main'));
		echo $this->Html->script(array('plugins/wizard/wizard'));
	?>
	<?php
		//FILE UPLOAD CSS
		echo $this->Html->css('blueimp-file-upload/style');
		echo $this->Html->css('blueimp-gallery/blueimp-gallery.min');
		echo $this->Html->css('blueimp-file-upload/jquery.fileupload');
		echo $this->Html->css('blueimp-file-upload/jquery.fileupload-ui');
		//FILE UPLOAD SCRIPT
		echo $this->Html->script('blueimp-gallery/jquery.blueimp-gallery.min');
		echo $this->Html->script('blueimp-file-upload/vendor/jquery.ui.widget');
	?>
	<!-- The Templates plugin is included to render the upload/download listings -->
	<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- blueimp Gallery script -->
	<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
		
	<?php
		echo $this->Html->script('blueimp-file-upload/jquery.iframe-transport');
		echo $this->Html->script('blueimp-file-upload/jquery.fileupload');
		echo $this->Html->script('blueimp-file-upload/jquery.fileupload-process');
		echo $this->Html->script('blueimp-file-upload/jquery.fileupload-image');
		echo $this->Html->script('blueimp-file-upload/jquery.fileupload-audio');
		echo $this->Html->script('blueimp-file-upload/jquery.fileupload-video');
		echo $this->Html->script('blueimp-file-upload/jquery.fileupload-validate');
		echo $this->Html->script('blueimp-file-upload/jquery.fileupload-ui');
		echo $this->Html->script('blueimp-file-upload/main');
	?>
	
	<?php	
		echo $scripts_for_layout;	
	?>
</head>
<body ng-app="amigosourceApp">
	<div class="container-fluid">
		<div id="a-Header" class="row">
			<div  class="col-md-12">
				<div class="row" style="padding-bottom: 5px;">
					<span class="col-md-4 col-xs-12">
						Welcome!
					</span>
					<span  class="col-md-4 col-md-offset-4">
						<a>Buyer</a> | <a>Seller</a> | <a>Help</a> | <a>About Us</a> | <a>Contact Us</a>
					</span>
				</div>
				<div class="row" style="padding-bottom: 5px;">
					<center class="col-md-2 col-xs-12">
						<img src="/amigosource/webroot/img/amigosource.png" height="60px;"/>
					</center>
					<span class="col-md-4 col-md-offset-6 col-xs-12" style="padding-top: 15px;">
						<div class="input-group">
						  <input type="text" class="form-control">
						  <span class="input-group-addon btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
						</div>
					</span>
				</div>
			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
	</div>
</body>