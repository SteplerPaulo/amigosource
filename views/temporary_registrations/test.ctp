<div class="col-lg-2">

	<?php
		echo $this->Form->create('TemporaryRegistrationProduct', array('type' => 'file','action'=>'add'));
		echo $form->input('image. ', array(
			'label' => 'Files:',
			'type' => 'file',
			'multiple' => 'multiple',
		));
		echo $this->Form->end('Upload');
		
	?>
</div>