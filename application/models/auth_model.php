<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends MY_Model {

	public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[user.email]'
            ],
            [
                'field' => 'pws',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[4]|max_length[30]'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'email'    => '',
            'pws'      => '',          
        ];
    }

}

/* End of file Level_model.php */
/* Location: ./application/models/Level_model.php */
