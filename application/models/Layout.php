<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Layout extends CI_Model {

		public function sidebar() {
			$query = $this->db->get('tbl_menu')->result_array();
			return $query;
		}

	}

?>