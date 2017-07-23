<?php 

// ========================================================
// setting email from https://mailtrap.io/
// ========================================================


	$config['protocol'] 	= 'smtp';
	$config['smtp_host'] 	= 'mailtrap.io';
	$config['smtp_port'] 	= 2525;
	$config['smtp_user'] 	= 'dee3a1cd756fbb';
	$config['smtp_pass'] 	= '609291f9d634d9';
	$config['crlf'] 		= "\r\n";
	$config['newline'] 		= "\r\n";

 ?>


 <!-- function sendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'xxx@gmail.com', // change it to yours
  'smtp_pass' => 'xxx', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = '';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('xxx@gmail.com'); // change it to yours
      $this->email->to('xxx@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

} -->