<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('body','isi_data',TRUE);
	}

	public function index()
	{
		$data['home'] 		= $this->isi_data->tampil_data('tbl_home');
		$data['profile'] 	= $this->isi_data->tampil_data('tbl_profile');
		$data['pelayanan']	= $this->isi_data->tampil_data('tbl_pelayanan');
		$data['team']		= $this->isi_data->tampil_data('tbl_team');

		$this->load->view('home',$data);
	}
}
