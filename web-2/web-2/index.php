<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $from = 'From: Home Form Submission'; 
    $to = 'cio@onclavesystems.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $Name\n E-Mail: $Email\n Message:\n $Message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    }
?>