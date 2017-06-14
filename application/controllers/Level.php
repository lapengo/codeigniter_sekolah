<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$data['title'] = "Level Admin";
		$data['level'] = $this->level->getAll();
		$this->template->admthemes('level/index',$data);
	}

	public function create()
	{
		$data['title'] = "Level Admin";
		$data['level'] = $this->level->getAll();
		$data['action'] = "level/insert";
		$this->template->admthemes('level/formCreate',$data);
	}

	public function insert()
	{
		$level = $this->input->post('level');

		$data = array(
			'name' => $level,
		);

		if ($this->level->insert($data)) {
	        $this->session->set_flashdata('success', '<strong>Success</strong>, Data user berhasil disimpan.');
	    } else {
	        $this->session->set_flashdata('error', '<strong>Error</strong>, Data user gagal disimpan.');
	    }
	    redirect('level');
	}

	public function delete($id = null)
	{
		$level = $this->level->where('idlevel', $id)->get();
        if (!$level) {
            $this->session->set_flashdata('warning', 'Data level tidak ada.');
            redirect('level');
        }

        if ($this->level->where('idlevel', $id)->delete()) {
			$this->session->set_flashdata('success', '<strong>Success</strong>, Data level berhasil dihapus.');
		} else {
            $this->session->set_flashdata('error', '<strong>Error</strong>, Data level gagal dihapus.');
        }

		redirect('level');
	}

	public function edit($id = null)
	{
		$data['title'] = "Edit Level Admin";
		$data['level'] = $this->level->where('idlevel', $id)->get();
		$data['action'] = "level/update";
		$this->template->admthemes('level/formEdit',$data);
	}

  public function update()
  {
		$id = $this->input->post('id');

    $input = array(
			'name' => $nama = $this->input->post('level')
		);

    if ($this->level->where('idlevel', $id)->update($input)) {
        $this->session->set_flashdata('success', '<strong>Success</strong>, Data siswa berhasil diupdate.');
    } else {
        $this->session->set_flashdata('error', '<strong>Failed</strong>, Data siswa gagal diupdate.');
    }
    redirect('level');
  }

}

/* End of file Level.php */
/* Location: ./application/controllers/Level.php */
