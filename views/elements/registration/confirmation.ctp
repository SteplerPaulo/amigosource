<div class="row TmpRegElement" id="confirmation"  style="display:none">	
	<div class="row">
		<div class="col-lg-8 col-lg-offset-4">
			<img id="siimage" src="./securimage?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" class="captcha"/>
	
			<a tabindex="-1" style="border-style: none;" href="#" title="Get another code" onclick="document.getElementById('siimage').src = './securimage?sid=' + Math.random(); this.blur(); return false">
				<img src="../webroot/images/refresh.png" alt="Reload Image" height="32" width="32" onclick="this.blur()" align="bottom" border="0" />
			</a>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-lg-3 col-lg-offset-4">
			<?php echo $this->Form->input('captcha',array('class'=>'form-control input-sm required','label'=>'Enter Code','placeholder'=>"*Required"));?>
		</div>
	</div>
</div>
		