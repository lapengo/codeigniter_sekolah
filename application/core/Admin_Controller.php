<?php
class Admin_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $username = $this->session->userdata('email');
        $level    = $this->session->userdata('level');

       if ($level !== '1') {
         redirect('login');
       }

    }
}
