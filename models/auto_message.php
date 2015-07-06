<?php
class AutoMessage extends AppModel {
	var $name = 'AutoMessage';
	function sendMessage($email,$message_key,$data,$subject='Confirmation'){
			$emailto = $email;
			$toname = 'User';
			$emailfrom = 'mail@tssi-erb.com';
			$fromname = 'Amigosource';
			$messagebody = $this->findById($message_key);
			$messagebody = $this->formatMessage($messagebody['AutoMessage']['message'],$data);
			
			$headers = 
				'Return-Path: ' . $emailfrom . "\r\n" . 
				'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
				'X-Priority: 3' . "\r\n" . 
				'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
				'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
				'MIME-Version: 1.0' . "\r\n" . 
				'Content-Transfer-Encoding: 8bit' . "\r\n" . 
				'Content-Type: text/plain; charset=UTF-8' . "\r\n";
			$params = '-f ' . $emailfrom;
			
			$mail = mail($emailto, $subject, $messagebody, $headers, $params);

			return array('body'=>$messagebody,'mail'=>$mail,'headers'=>$headers);
		
	}
	function sendViaPHPMailer($email,$subject,$message_key,$data){
			
			$messagebody = $this->findById($message_key);
			$messagebody = $this->formatMessage($messagebody['AutoMessage']['message'],$data);
			
			require 'vendors/phpMailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'mail.tssi-erb.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'mail@tssi-erb.com';                 // SMTP username
			$mail->Password = 'Ch0wK1ing';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to

			$mail->From = 'mail@tssi-erb.com';
			$mail->FromName = 'Amigosource';
			$mail->addAddress($email);               // Name is optional
			$mail->addReplyTo('mail@tssi-erb.com', 'Reply-To');
			$mail->addCC('mail@tssi-erb.com');

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body    = nl2br($messagebody);
			//$mail->AltBody = $messagebody;
			
			if(!$mail->send()) {
				return 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				return 'Message has been sent';
			}
	}
	protected function formatMessage($format, array $args = array()) {
        $arg_nums = array_slice(array_flip(array_keys(array(0 => 0) + $args)), 1);

        for ($pos = 0; preg_match('/(?<=%)\(([a-zA-Z_][\w\s]*)\)/', $format, $match, PREG_OFFSET_CAPTURE, $pos);) {
            $arg_pos = $match[0][1];
            $arg_len = strlen($match[0][0]);
            $arg_key = $match[1][0];

            if (! array_key_exists($arg_key, $arg_nums)) {
                user_error("sprintfn(): Missing argument '${arg_key}'", E_USER_WARNING);
                return false;
            }
            $format = substr_replace($format, $replace = $arg_nums[$arg_key] . '$', $arg_pos, $arg_len);
            $pos = $arg_pos + strlen($replace); // skip to end of replacement for next iteration
        }
        return vsprintf($format, array_values($args));
    }
}
