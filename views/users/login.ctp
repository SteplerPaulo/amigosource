<div class="row-fluid">
	<div class="col-sm-5 div col-sm-offset-4">
		<?php echo $this->Form->create('User',array('action'=>'login','class'=>'form-vertical','inputDefaults' => array('input'=>array('class'=>'form-control'),'div'=>array('class'=>'form-group'))));?>
		<?php echo $this->Form->input('email');?>
		<?php echo $this->Form->input('password');?>
		<div class="actions ">
		<button class="btn btn-default  pull-left" type="submit">Register</button>
		<button class="btn btn-primary  pull-right" type="submit">Sign in</button>
		</div>
		<?php echo $this->Form->end();?>
	</div>
</div>