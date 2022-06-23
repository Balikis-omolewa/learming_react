<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'omolewabalikis149@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_omolewabalikis149@gmail.com;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->phone = $_POST['phone'];
  $contact->state = $_POST['state'];
  $contact->country = $_POST['country'];
  $contact->LGA = $_POST['LGA'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'http://127.0.0.1:5500/index.html',
    'username' => 'Mydatabase',
    'password' => 'utf8mb4_general_ci	',
    'port' => '587'
  );
  
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_phone( $_POST['phone'], 'Phone', 10);
  $contact->add_state( $_POST['sate'], 'State', 10);

  $contact->add_country( $_POST['country'], 'Country', 10);

  $contact->add_LGA( $_POST['LGA'], 'LGA', 10);
isset('$sumbit'){
  echo: "Data submit successfully"
}

  echo $contact->send();
?>
