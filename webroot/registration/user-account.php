<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
		<div class="input text"><label for="TemporaryRegistrationEmail">Email</label><input name="data[TemporaryRegistration][email]" type="text" class="form-control input-sm" maxlength="35" id="TemporaryRegistrationEmail"></div>		<div class="input password"><label for="TemporaryRegistrationPassword">Password</label><input type="password" name="data[TemporaryRegistration][password]" class="form-control input-sm" id="TemporaryRegistrationPassword"></div>		<div class="input password"><label for="TemporaryRegistrationConfirmPassword">Confirm Password</label><input type="password" name="data[TemporaryRegistration][confirm_password]" class="form-control input-sm" id="TemporaryRegistrationConfirmPassword"></div><br>
		<input type="hidden" name="data[TemporaryRegistration][registration_date]" value="2015-05-06" id="TemporaryRegistrationRegistrationDate"><br>
		
		<label><b>I'm a</b></label>
		<div class="form-group">
			<label class="radio-inline">
				<input type="radio" name="data[TemporaryRegistration][registration_type]" value="1" ng-click="registration_type('Supplier')" checked="">Suppplier
			</label>
			<label class="radio-inline">
				<input type="radio" name="data[TemporaryRegistration][registration_type]" value="2" ng-click="registration_type('Buyer')">Buyer
			</label>
		</div>
	</div>
</div>