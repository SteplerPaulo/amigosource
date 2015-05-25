<div class="row TmpRegElement" id="user-account">
	<div class="col-lg-4 col-lg-offset-4">
		<?php echo $this->Form->input('email',array('class'=>'form-control input-sm required'));?>
		<?php echo $this->Form->input('password',array('id'=>'Password','type'=>'password','class'=>'form-control input-sm required'));?>
		<?php echo $this->Form->input('confirm_password',array('id'=>'ConfirmPassword','type'=>'password','class'=>'form-control input-sm required'));?><br/>
		<?php echo $this->Form->input('registration_date',array('value'=>date('Y-m-d'),'type'=>'hidden','class'=>'form-control input-sm'));?><br/>
		
		<label><b>I'm a</b></label>
		<div class="form-group">
			<label class="radio-inline">
				<input class="registration-type" type="radio" name="data[TemporaryRegistration][registration_type]" value="1" checked>Suppplier
			</label>
			<label class="radio-inline">
				<input class="registration-type" type="radio" name="data[TemporaryRegistration][registration_type]" value="2">Buyer
			</label>
		</div>
	</div>
</div>
		