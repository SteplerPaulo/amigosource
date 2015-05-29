<div class="col-lg-2">

	<?php
		echo $this->Form->create('TemporaryRegistrationProduct', array('action'=>'test'));
		echo $this->Form->input('test');
		echo $this->Form->submit('Submit',array('type'=>'button','id'=>'submit-btn'));
		echo $this->Form->end();
		
	?>
</div>
<script type="text/javascript"> 
$(document).ready(function(){
	$('#submit-btn').click(function(){
		$.ajax({
			url: '/amigosource/temporary_registrations/test',
			type: 'POST',
			data:{'data':{test:$('#TemporaryRegistrationProductTest').val()}},
			dataType: 'json',
			success:function(data){
				console.log(data);
			}
		});		
	});
});
</script>