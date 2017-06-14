<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {
	public function getValidationRules()
  {
      $validationRules = [
         
					[
              'field' => 'nameUser',
              'label' => 'Nama Lengkap',
              'rules' => 'trim|required|min_length[6]|max_length[30]'
          ]
      ];

      return $validationRules;
   }

	    public function getDefaultValues()
	    {
	        return [
	            
	            'nameUser'  => '',
	            
	        ];
	    }
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
