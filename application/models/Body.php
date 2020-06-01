<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Body extends CI_Model {

		public function tampil_data($table) {
			$query = $this->db->get($table)->result_array();
			return $query;
		}

		public function detail_data($table, $where) {
			$query = $this->db->get_where($table, $where)->result_array();
			return $query;
		}

		public function update_data($table, $data, $where) {
			$query = $this->db->update($table, $data, $where);
			return $query;
		}

		public function add_data($table, $data) {
			$query = $this->db->insert($table, $data);
			return $query;
		}

		public function delete_data($table, $where){
			$this->db->where($where);
			$query = $this->db->delete($table);
			return $query;
		}

	}

?>