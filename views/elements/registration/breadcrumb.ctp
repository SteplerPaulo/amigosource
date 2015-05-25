<?php echo $this->Html->script(array('breadcrumb'),array('inline'=>false));?>
<div class="row-fluid" id="Breadcrumb">
	<ol class="wizard" style="overflow: scroll;">
		<li  class="current" element="user-account">
			<span class="badge">1</span> 
			User Account  
			<i class="glyphicon glyphicon-user"></i> 
		</li>
		<li element="member-details">
			<span class="badge">2</span> 
			Member Details
			<i class="glyphicon glyphicon glyphicon-file"></i> 
		</li>
		<li element="certification-and-profile">
			<span class="badge">3</span> 
			Certifications & Profile  
			<i class="glyphicon glyphicon-folder-close"></i>
		</li>
		<li element="product-details">
			<span class="badge">4</span> 
			Product Details
			<i class="glyphicon glyphicon-shopping-cart"></i> 
		</li>
		<li element="confirmation">
			<span class="badge">5</span> 
			Confirmation
			<i class="glyphicon glyphicon-thumbs-up"></i>
		</li>

	</ol>
</div>