
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CaptchaError">Captcha Error</button>

<div class="modal fade" id="CaptchaError" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title error">Alert</h4>
			</div>
			<div class="modal-body">
				<p>There was an error with your submission.</p>
				<p><i class="glyphicon glyphicon-chevron-right error"></i> Incorrect security code entered.</p>
			</div>
		</div>
	</div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SendingLoader">Sending Loader</button>

<div class="modal fade" id="SendingLoader" tabindex="-1" role="dialog" aria-labelledby="SendingLoader" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<img src="/amigosource/webroot/images/loader2.gif" style="width: 100%;height: 20px;">Sending registration. Please wait.</img>
				</center>
			</div>
		</div>
	</div>
</div>