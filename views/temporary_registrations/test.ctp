
<a  data-toggle="modal" data-target="#AddProductImage" class="glyphicon glyphicon-plus-sign add-product-image" data-toggle="tooltip" title="Add Product Image"></a>
							
<div class="modal fade" id="AddProductImageModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add Image</h4>
			</div>
			<div class="modal-body">
				<form class="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
					<?php echo $this->element("file_upload");?>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 	
	echo $this->Html->script('biz/registration/products',array('inline'=>false));
?>