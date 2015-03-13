<?php echo $this->element('breadcrumb');?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<?php echo $this->Form->create('User');?>
		<?php echo $this->Form->input('email',array('class'=>'form-control input-sm'));?><br/>
		<?php echo $this->Form->input('password',array('class'=>'form-control input-sm'));?><br/>
		<?php echo $this->Form->input('confirm_password',array('class'=>'form-control input-sm'));?><br/>
		
		<label><b>I'm a</b></label>
		<div class="form-group">
			<label class="radio-inline">
				<input type="radio" name="data[User][type]" value="Supplier" checked onclick="href('supplier')">Suppplier
			</label>
			<label class="radio-inline">
				<input type="radio" name="data[User][type]" value="Buyer" onclick="href('buyer')">Buyer
			</label>
		</div>
		<h3 class="pull-right">Next <a href="/amigosource/supplier-member-details" id="Next" class="glyphicon glyphicon-circle-arrow-right"></a></h3>
		
	<?php echo $this->Form->end();?>
	</div>
</div>

<script>
	function href(memberType){
		switch(memberType){
			case 'supplier':
				document.getElementById('Next').setAttribute("href", "/amigosource/supplier-member-details");
				break;
			case 'buyer':
				document.getElementById('Next').setAttribute("href", "/amigosource/buyer-member-details");
				break;
		}
	}
</script>