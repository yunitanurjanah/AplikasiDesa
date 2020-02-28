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
		$data['home'] = $this->isi_data->tampil_data('tbl_home');

		$this->load->view('home',$data);
	}
}
