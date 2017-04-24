<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rlg_Controller extends CI_Controller {

	function themes($content, $data = NULL){
    /*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */
        $data['leftbar'] = $this->_ci->load->view('layout/leftbar_layout', $data, TRUE);
        $data['headlay'] = $this->_ci->load->view('layout/header_layout', $data, TRUE);
        $data['contents'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('layout/footer', $data, TRUE);
        
        $this->_ci->load->view('layout/default', $data);
    }

}

/* End of file rlg.php */
/* Location: ./application/core/rlg.php */