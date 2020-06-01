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

        //upload foto
        $config['upload_path']          = './assets/eBusiness/img/slider/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 20000;
        $config['max_width']            = 15000;
        $config['max_height']           = 15000;
        $new_name = time()."home";
        $config['file_name'] = $new_name;

        $id             = $this->input->post('id');
        $title_1        = $this->input->post('title_1');
        $title_2        = $this->input->post('title_2');
        $gambar_slider  = $new_name;
        $page_scroll_1  = $this->input->post('page_scroll_1');
        $page_scroll_2  = $this->input->post('page_scroll_2');


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar_slider')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }else{
            $data1 = $this->upload->data();
            
            $data = array(
                'title_1'       => $title_1,
                'title_2'       => $title_2,
                'gambar_slider' => $data1['file_name'],
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
        //upload foto
        $config['upload_path']          = './assets/eBusiness/img/about/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 20000;
        $config['max_width']            = 15000;
        $config['max_height']           = 15000;
        $new_name = time()."profile";
        $config['file_name'] = $new_name;


        $id                 = $this->input->post('id');
        $title_profile      = $this->input->post('title_profile');
        $subtitle_profile   = $this->input->post('subtitle_profile');
        $description        = $this->input->post('description');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }else{
            $data1 = $this->upload->data();
            $data = array(
                'title_profile'         => $title_profile,
                'subtitle_profile'      => $subtitle_profile,
                'description'           => $description,            
                'gambar_profile'        => $data1['file_name']
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
        $facebook_pegawai       = $this->input->post('facebook_pegawai');
        $instagram_pegawai      = $this->input->post('instagram_pegawai');
        $twitter_pegawai        = $this->input->post('twitter_pegawai');

        $data = array(
            'nama_pegawai'      => $nama_pegawai,
            'jabatan'           => $jabatan,
            'foto_pegawai'      => $foto_pegawai,
            'facebook_pegawai'  => $facebook_pegawai,
            'instagram_pegawai' => $instagram_pegawai,
            'twitter_pegawai'   => $twitter_pegawai
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

    //daftar berita
    public function berita()
    {
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->tampil_data('tbl_berita');
        $this->load->view('admin/berita/berita',$data);
    }

    public function detail_berita()
    {
        $detail = $this->input->post('id');
        
        $where = array(
            'id_berita'   => $detail
        );
        $data['sidebar'] = $this->tampilan->sidebar();
        $data['isi'] = $this->isi_data->detail_data('tbl_berita', $where);
        $this->load->view('admin/berita/detail_berita',$data);
    }

    public function edit_berita()
    {
        //upload foto
        $config['upload_path']          = './assets/eBusiness/img/blog/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1500;
        $config['max_height']           = 1500;
        $new_name = time()."berita";
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);


        $id                     = $this->input->post('id');
        $title_berita           = $this->input->post('title_berita');
        $body_berita            = $this->input->post('body_berita');
        $sumber_berita          = $this->input->post('sumber_berita');
        $tanggal                = $this->input->post('tanggal');
        

        $data = array(
            'title_berita'  => $title_berita,
            'body_berita'   => $body_berita,
            'sumber_berita' => $sumber_berita,
            'tanggal'       => $tanggal
        );

        $where = array(
            'id_berita'   => $id
        );

        if ( ! $this->upload->do_upload('foto_berita')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            print_r($data);
        }

        // $update = $this->isi_data->update_data('tbl_berita', $data, $where);

        // if($update == true){
        //     echo "berhasil";
        //     redirect(base_url('index.php/Admin/berita'));
        // }else{
        //     echo "gagal";
        //     redirect(base_url('index.php/Admin/berita'));
        // }
    }

}
