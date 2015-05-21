<br/>
<div class="row">
	<?php echo $this->Form->create('User',array('class'=>'col-lg-4 col-lg-offset-4'));?>
		<h2 class="form-signin-heading">Please sign in</h2>
		<?php
			echo $this->Session->flash('auth').'<br>';
			echo $this->Form->input('username',array('label'=>'E-mail','required'=>'required','class'=>'form-control input-sm',));
			echo $this->Form->input('password',array('id'=>'UserPassword','required'=>'required','onkeypress'=>'PasswordCapsLock(event)','class'=>'form-control input-sm required'));
		?>
		<!--
		<div class="checkbox">
			<label><input type="checkbox" value="remember-me"> Remember me</label>
		</div>
		-->
	<br/>
	<?php echo $this->Form->submit(__('Sign in', true), array('class'=>'btn btn-primary btn-lg btn-block'));?>
	<?php echo $this->Form->end();?>
</div>
<?php
	echo $this->Html->script(array('biz/acl/login'),array('inline'=>false));
?>
