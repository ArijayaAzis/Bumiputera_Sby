<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Model {
	protected $table;
	protected $primaryKey;
	public function __construct() {
		parent::__construct();
		$this->table = 'ms_general';
		$this->primaryKey = 'id';
	}

	public function all()
	{
		$data = $this->db->get($this->table);
		return $data;
	}

	public function first($term)
	{
		$data = $this->db->get_where($this->table,$term)->order_by($this->primaryKey, 'ASC')->row();
		return $data;
	}

	public function find($id)
	{
		$data = $this->db->get_where($this->table,[$this->primaryKey => $id])->row();
		return $data;
	}

	public function get($term, $order = null)
	{
		if(empty($order))
			$data = $this->db->get_where($this->table,$term)->order_by($this->primaryKey, 'ASC');
		else
			$data = $this->db->get_where($this->table,$term)->order_by($order[0], $order[1]);
		return $data;
	}

	public function create($data)
	{
		$result = $this->db->insert($this->table, $data);
		return $result;
	}

	public function update($term,  $data)
	{
		$result = $this->db->update($this->table, $data, $term);
		return $result;
	}

	public function delete($term)
	{
		$this->db->delete($this->table, $term);
		return;
	}

	public function truncate()
	{
		$this->db->truncate($this->table);
	}

	public function count()
	{
		$query = $this->db->query("select * from ".$this->table);
		return $query->num_rows();
	}
}