<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {

	// $this->form_validation->set_rules('level', 'Level', 'required');
		// $this->form_validation->set_rules('email', 'Email Active', 'required');
		// $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[5]');
		// $this->form_validation->set_rules('fname', 'Full Name', 'required|min_length[5]');

	public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'email',
                'label' => 'Email Active',
                'rules' => 'trim|required|valid_email|is_unique[user.email]'
            ],
            [
                'field' => 'idlevel',
                'label' => 'Level',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'pws',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[4]|max_length[30]'
            ],
            [
                'field' => 'nameUser',
                'label' => 'Full Name',
                'rules' => 'trim|required|min_length[4]|max_length[30]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'email'    => '',
            'idlevel'  => '',
            'pws'      => '',
            'nameUser' => '',
            'descr'    => '',
            'token'    => '',
            'joinDate' => ''            
        ];
    }

    // public function insert_user()
    // {
    //     $this->load->helper('string');
    //     $_SESSION['token'] = random_string('alnum',16);
    // }

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */