<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct()
	{
        parent::__construct();
        $this->load->model('user','login',TRUE);
        $this->load->model('layout','tampilan',TRUE);
        $this->load->model('body','isi_data',TRUE);
	}
    
    public function index()
	{
		$this->load->view('admin/login');
    }
    
    public function aksi_login()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
			'password' => md5($password)
        );

        $hasil = $this->login->cek_user($data);

        if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->nama_user;
				$this->session->set_userdata($sess_data);
            }
            
            redirect(base_url('/index.php/admin/home'));
		}
		else {
            redirect(base_url('admin/login'));
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
    }
    
    public function home()
	{
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->tampil_data('tbl_home');
        $this->load->view('admin/home/home',$data);
    }

    public function detail_home()
	{
        $detail = $this->input->post('id');

        $where = array(
            'id_home'   => $detail
        );
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->detail_data('tbl_home', $where);
        $this->load->view('admin/home/detail_home',$data);
    }

    public function edit_home()
	{
        $id = $this->input->post('id');
        $title_1 = $this->input->post('title_1');
        $title_2 = $this->input->post('title_2');
        $gambar_slider = $this->input->post('gambar_slider');
        $page_scroll_1 = $this->input->post('page_scroll_1');
        $page_scroll_2 = $this->input->post('page_scroll_2');

        $data = array(
            'title_1'       => $title_1,
            'title_2'       => $title_2,
            'gambar_slider' => $gambar_slider,
            'page_scroll_1' => $page_scroll_1,
            'page_scroll_2' => $page_scroll_2
        );

        $where = array(
            'id_home'   => $id
        );

        $update = $this->isi_data->update_data('tbl_home', $data, $where);

        if($update == true){
            echo "berhasil";
            redirect(base_url('index.php/Admin/home'));
        }else{
            echo "gagal";
            redirect(base_url('index.php/Admin/home'));
        }
    }

    //profile data
    public function profile()
	{
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->tampil_data('tbl_profile');
        $this->load->view('admin/profile/profile',$data);
    }

    public function detail_profile()
	{
        $detail = $this->input->post('id');

        $where = array(
            'id_profile'   => $detail
        );
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->detail_data('tbl_profile', $where);
        $this->load->view('admin/profile/detail_profile',$data);
    }

    public function edit_profile()
	{
        $id                 = $this->input->post('id');
        $title_profile      = $this->input->post('title_profile');
        $subtitle_profile   = $this->input->post('subtitle_profile');
        $description        = $this->input->post('description');
        $gambar             = $this->input->post('gambar');

        $data = array(
            'title_profile'         => $title_profile,
            'subtitle_profile'      => $subtitle_profile,
            'description'           => $description,            
            'gambar_profile'        => $gambar
        );
        // print_r($data);
        $where = array(
            'id_profile'   => $id
        );

        $update = $this->isi_data->update_data('tbl_profile', $data, $where);

        if($update == true){
            echo "berhasil";
            redirect(base_url('index.php/Admin/profile'));
        }else{
            echo "gagal";
            redirect(base_url('index.php/Admin/profile'));
        }
    }

    //daftar Pelayanan
    public function pelayanan()
	{
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->tampil_data('tbl_pelayanan');
        $this->load->view('admin/pelayanan/pelayanan',$data);
    }

    public function detail_pelayanan()
	{
        $detail = $this->input->post('id');

        $where = array(
            'id_pelayanan'   => $detail
        );
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->detail_data('tbl_pelayanan', $where);
        $this->load->view('admin/pelayanan/detail_pelayanan',$data);
    }

    public function edit_pelayanan()
	{
        $id                     = $this->input->post('id');
        $nama_pelayanan         = $this->input->post('nama_pelayanan');
        $penjelasan_pelayanan   = $this->input->post('penjelasan_pelayanan');
        $icon                   = $this->input->post('icon');
        $link                   = $this->input->post('link');

        $data = array(
            'nama_pelayanan'         => $nama_pelayanan,
            'penjelasan_pelayanan'   => $penjelasan_pelayanan,
            'icon'                   => $icon,            
            'link'                   => $link
        );

        $where = array(
            'id_pelayanan'   => $id
        );

        $update = $this->isi_data->update_data('tbl_pelayanan', $data, $where);

        if($update == true){
            echo "berhasil";
            redirect(base_url('index.php/Admin/pelayanan'));
        }else{
            echo "gagal";
            redirect(base_url('index.php/Admin/pelayanan'));
        }
    }

    //daftar Pegawai
    public function team()
	{
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->tampil_data('tbl_team');
        $this->load->view('admin/team/team',$data);
    }

    public function detail_team()
	{
        $detail = $this->input->post('id');
        
        $where = array(
            'id_pegawai'   => $detail
        );
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->detail_data('tbl_team', $where);
        $this->load->view('admin/team/detail_team',$data);
    }

    public function edit_team()
	{
        $id                     = $this->input->post('id');
        $nama_pegawai           = $this->input->post('nama_pegawai');
        $jabatan                = $this->input->post('jabatan');
        $foto_pegawai           = $this->input->post('foto_pegawai');

        $data = array(
            'nama_pegawai'  => $nama_pegawai,
            'jabatan'       => $jabatan,
            'foto_pegawai'  => $foto_pegawai
        );

        $where = array(
            'id_pegawai'   => $id
        );

        $update = $this->isi_data->update_data('tbl_team', $data, $where);

        if($update == true){
            echo "berhasil";
            redirect(base_url('index.php/Admin/team'));
        }else{
            echo "gagal";
            redirect(base_url('index.php/Admin/team'));
        }
    }
}