<?php

$GLOBALS['ct_recipient']   = 'YOU@EXAMPLE.COM'; // Change to your email address!
$GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';

$GLOBALS['DEBUG_MODE'] = 1;
// CHANGE TO 0 TO TURN OFF DEBUG MODE
// IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT


// Process the form, if it was submitted
Process();

?>

<fieldset>
<legend>Example Form</legend>



<div id="success_message" style="display: none">Your message has been sent!<br />We will contact you as soon as possible.</div>

<form method="post" action="" id="TemporaryRegistrationAddForm" onsubmit="return processForm()">
  <input type="hidden" name="do" value="contact" />

  <p>
    <strong>Name*:</strong><br />
    <input type="text" name="ct_name" size="35" value="" />
  </p>

  <p>
    <strong>Email*:</strong><br />
    <input type="text" name="ct_email" size="35" value="" />
  </p>
  <p>
    <img id="siimage" src="./securimage?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left" class="captcha"/>
    
	<object type="application/x-shockwave-flash" data="<?php echo $this->Html->url( '/webroot/securimage_play.swf?bgcol=#ffffff&amp;icon_file=/webroot/images/audio_icon.png&amp;audio_file=./securimage' ); ?>"  height="32" width="32">
		
		<param name="movie" value="<?php echo $this->Html->url( '/webroot/securimage_play.swf?bgcol=#ffffff&amp;icon_file=/webroot/images/audio_icon.png&amp;audio_file=./securimage' ); ?>" />
    </object>
	
	  <object type="application/x-shockwave-flash" data="./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php" height="32" width="32">
    <param name="movie" value="./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php" />
    </object>
    &nbsp;
    
	<a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = './securimage?sid=' + Math.random(); this.blur(); return false">
		<img src="../webroot/images/refresh.png" alt="Reload Image" height="32" width="32" onclick="this.blur()" align="bottom" border="0" />
	</a><br />
    
	<strong>Enter Code*:</strong><br />
    <input type="text" name="ct_captcha" size="12" maxlength="8" />
  </p>

  <p>
    <br />
    <input type="submit" value="Submit Message" />
  </p>
	
</form>
</fieldset>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
    $.noConflict();

    function reloadCaptcha()
    {
        jQuery('#siimage').prop('src', './securimage?sid=' + Math.random());
		
    }

    function processForm()
    {
		console.log('amigosource/pages/captcha');
		jQuery.ajax({
			url: '/amigosource/pages/captcha',
			type: 'POST',
			data: jQuery('#TemporaryRegistrationAddForm').serialize(),
			dataType: 'json',
		}).done(function(data) {
			console.log(data);
			if (data.error === 0) {
				jQuery('#success_message').show();
				jQuery('#TemporaryRegistrationAddForm')[0].reset();
				reloadCaptcha();
				setTimeout("jQuery('#success_message').fadeOut()", 12000);
			} else {
				alert("There was an error with your submission.\n\n" + data.message);
			}
		});

        return false;
    }
</script>

<?php

// The form processor PHP code
function Process()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
        // if the form has been submitted

        foreach($_POST as $key => $value) {
            if (!is_array($key)) {
                // sanitize the input data
                if ($key != 'ct_message') $value = strip_tags($value);
                $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
            }
        }

        $name    = @$_POST['ct_name'];    // name from the form
        $email   = @$_POST['ct_email'];   // email from the form
        $URL     = @$_POST['ct_URL'];     // url from the form
        $message = @$_POST['ct_message']; // the message from the form
        $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code
        $name    = substr($name, 0, 64);  // limit name to 64 characters

        $errors = array();  // initialize empty error array

        if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
            // only check for errors if the form is not in debug mode

            if (strlen($name) < 3) {
                // name too short, add error
                $errors['name_error'] = 'Your name is required';
            }

            if (strlen($email) == 0) {
                // no email address given
                $errors['email_error'] = 'Email address is required';
            } else if ( !preg_match('/^(?:[\w\d-]+\.?)+@(?:(?:[\w\d]\-?)+\.)+\w{2,4}$/i', $email)) {
                // invalid email format
                $errors['email_error'] = 'Email address entered is invalid';
            }

            if (strlen($message) < 20) {
                // message length too short
                $errors['message_error'] = 'Please enter a message';
            }
        }

        // Only try to validate the captcha if the form has no errors
        // This is especially important for ajax calls
        if (sizeof($errors) == 0) {
		
            $securimage = new Securimage();
			if ($securimage->check($captcha) == false) {
                $errors['captcha_error'] = 'Incorrect security code entered';
            }
        }

        if (sizeof($errors) == 0) {
            // no errors, send the form
            $time       = date('r');
            $message = "A message was submitted from the contact form.  The following information was provided.<br /><br />"
                     . "Name: $name<br />"
                     . "Email: $email<br />"
                     . "URL: $URL<br />"
                     . "Message:<br />"
                     . "<pre>$message</pre>"
                     . "<br /><br />IP Address: {$_SERVER['REMOTE_ADDR']}<br />"
                     . "Time: $time<br />"
                     . "Browser: {$_SERVER['HTTP_USER_AGENT']}<br />";

            if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
                // send the message with mail()
                mail($GLOBALS['ct_recipient'], $GLOBALS['ct_msg_subject'], $message, "From: {$GLOBALS['ct_recipient']}\r\nReply-To: {$email}\r\nContent-type: text/html; charset=ISO-8859-1\r\nMIME-Version: 1.0");
            }

            $return = array('error' => 0, 'message' => 'OK');
            die(json_encode($return));
        } else {
            $errmsg = '';
            foreach($errors as $key => $error) {
                // set up error messages to display with each field
                $errmsg .= " - {$error}\n";
            }

            $return = array('error' => 1, 'message' => $errmsg);
            die(json_encode($return));
        }
    } // POST
} // function process_si_contact_form()
