<center class="row TmpRegElement" id="confirmation">	
	  <p>
		<img id="siimage" src="./securimage?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left" class="captcha"/>
		&nbsp;
		
		<a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = './securimage?sid=' + Math.random(); this.blur(); return false"><img src="../webroot/images/refresh.png" alt="Reload Image" height="32" width="32" onclick="this.blur()" align="bottom" border="0" /></a><br />
		
		<strong>Enter Code*:</strong><br />
		<input type="text" name="ct_captcha" size="12" maxlength="8" />
	  </p>

	
	<h5>Horay!You are one step away to complete our registration process.Please be advise that we will send you a confirmation message on the email address you provided... Oh, and don't forget to click send button to send your registration form to us.Thank you!</h5>
	<h6>(This is a confirmation message example)</h6>
</center>
		