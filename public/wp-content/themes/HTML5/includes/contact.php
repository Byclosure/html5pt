<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
	<div id="contact-mail">

		<?php

		if ($pov_email_address) {
        $mailTo = htmlspecialchars($pov_email_address);
		}

        if (isset($_POST['Name'])) {

        $name = htmlspecialchars($_POST['Name']);

        }

        if (isset($_POST['Email'])) {

        $mailFrom = htmlspecialchars($_POST['Email']);

        }

        if (isset($_POST['Message'])) {

        $message_text = htmlspecialchars($_POST['Message']);

        }

        $subject = 'Message from contact form';

        $message =  'From: '.$name.'; Email: '.$mailFrom.' ; Message: '.$message_text;
        
        if (isset($_POST['Email'])) {		// DO NOT remove this isset test, otherwise you will receive an email every time someone visits the contact page
        mail($mailTo, $subject, $message);
		}
        ?>

              <form id="contact-form" method="post" action="#">
              
                
                
                  <input name="Name" id="cont-name" type="text" value="Nome" onfocus="if (this.value == 'Name (required)') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Name (required)';}"/>
                  <br/>
                
                
                  <input name="Email" id="e-mail"  type="text" value="E-Mail" onfocus="if (this.value == 'E-Mail (required)') {this.value = '';}" onblur="if (this.value == '') {this.value = 'E-Mail (required)';}"/>
                  <br/>
                
                
                  <p class="input_form" id="textarea"><textarea name="Message" cols="20" rows="6" id="message_input">Mensagem...</textarea>
                  
                  </p>
                
                <input type="submit" id="form-submit" alt="send it" name="submitButton" value="<?php _e('Send','pov'); ?>" class="submit"/>
              
              </form>
         		   
	</div>
	
	

<div class="clear"></div>