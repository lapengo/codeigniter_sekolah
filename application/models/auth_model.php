<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends MY_Model {

public $table = 'user';

	public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
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

		public function login($input)
    {
        $input->pws = md5($input->pws);

        $user = $this->db->where('email', $input->email)
                          ->where('pws', $input->pws)
                          ->where('status', 'active')
                          ->limit(1)
                          ->get($this->table)
                          ->row();

        if (count($user)) {
            $data = [
                'username' => $user->email,
                'level'    => $user->idlevel
            ];

            $this->session->set_userdata($data);
            return true;
        }

        return false;
    }

		public function logout()
    {
        $data = [
            'username' => null,
            'level'    => null
        ];
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
    }

}

/* End of file Level_model.php */
/* Location: ./application/models/Level_model.php */
