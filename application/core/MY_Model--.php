<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $table	='';
	protected $perPage	= 0;

	public function query($sql)
	{
		return $this->db->query($sql);
	}

	public function get()
	{
		return $this->db->get($this->table)->row();
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function paginate($page)
	{
		$this->db->limit(
							$this->perPage,
							$this->calculateRealOffset($page)
						);
		return $this;
	}

	public function calculateRealOffset($page)
	{
		if (is_null($page) || empty($page)) {
			$offset 	= 0;
		} else {
			$offset 	= ($page * $this->perPage) - $this->perPage;
		}

		return $offset;
	}

	public function select($columns)
	{
		$this->db->select($columns);
		return $this;
	}

	public function where($columns, $condition)
	{
		$this->db->where($columns, $condition);
		return $this;
	}

	public function orLike($columns, $condition)
	{
		$this->db->or_like($columns, $condition);
		return $this;
	}


// untuk validasi form
	public function validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="form-error">', '</p>');
		$validationRules	= $this->getValidationRules();
		$this->form_validation->set_rules($validationRules);

		return $this->form_validation->run();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($data)
	{
		$this->db->update($this->table, $data);
	}

	public function delete()
	{
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}

  public function join($table, $type='left')
  {
    $this->db->join(
                    $table,
                    "$this->table.id_$table = $table.id_$table", $type
                  );
    return $this;
  }

  public function orderBy($kolom, $order='asc')
  {
    $this->db->order_by($kolom, $order)
    return $this;
  }

  public function makePagination($baseURL, $uriSegment, $totalRows = null)
  {
    $args = func_get_args();
    $this->load->library('pagination');

    $config =[
                // isi nanti
             ]

  }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */


 ?>
