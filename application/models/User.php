<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tbl_users', $data);
			return $query;
		}

	}

?>