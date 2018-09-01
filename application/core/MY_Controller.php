<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function post_data()//menankap data yang di kirim dari form jadi harus $data=$this->data();
	{
		$halaman = $this->uri->segment(3);//unutk di load di form view
		if ($halaman == 'buku') {
			$data = array(
				'judul_buku'	 	=> $this->input->post('judul_buku',TRUE),
				'jumlah_halaman' 	=> $this->input->post('jumlah_halaman',TRUE),
				'penerbit' 			=> $this->input->post('penerbit',TRUE),
				'tahun_terbit' 		=> $this->input->post('tahun_terbit',TRUE),
				'kategori'		 	=> $this->input->post('kategori',TRUE),
			);

		 } else if ($halaman == 'user') {
			$data = array(
							'username' 	=> $this->input->post('username', TRUE),
							'password' 	=> md5($this->input->post('password', TRUE)),
			);

		} else if ($halaman == 'pengunjung') {
			$data = array(
				'tanggal_kunjung' 	=> $this->input->post('tanggal_kunjung',TRUE),
				'buku_pinjam'		=> $this->input->post('buku_pinjam',TRUE),
				//'judul_buku'		=> $this->input->post('judul_buku',TRUE),
				 //'pk_buku'		=> $this->input->post('pk_buku'),
				 );

		} 

		if ($this->do_upload()) {  //jika do_upload ini  
		$data['gambar'] = $this->upload->data('file_name'); // data upload ini dengan nama bebas

		}
			return $data;


		//$xss = $this->security->xss_clean($data); 
		
	}
	
	public function cek_sql($sql,$halaman)// mengatur halaman dan sql 
	{
		if ($sql) {
			$this->session->set_flashdata('sukses', 'data berhasil dimanipulasi'); //JIKA BERHASIL AKAN DI ARAHKAN KE ADMIN/DAFTAR
			//echo 1;
			 redirect(site_url('admin/daftar/'.$halaman),'refresh');
		} else {
			$this->session->set_flashdata('gagal', 'data gagal dimanipulasi');
			//echo 0;
			 redirect(site_url('admin/input/'.$halaman),'refresh');
		}
		
	}

	public function template($page='home')///membangaun sebuah template
	{
		$data = $this->data(); 
		$data['judul']		= ucfirst($page);
		// $data['form_input']	= form_open_multipart('input/'.$halaman);//stiap da data pasti harus setting di atuoload helper

		
		$data['meta'] 		= $this->parser->parse('section/meta'	,$data,true); 
		$data['css'] 		= $this->parser->parse('section/css'	,$data,true); 
		$data['flash'] 		= $this->parser->parse('section/flash'	,$data,true); 
		$data['nav' ]		= $this->parser->parse('section/nav'	,$data,true); 
		$data['header'] 	= $this->parser->parse('section/header'	,$data,true); 
		$data['konten'] 	= $this->parser->parse('page/'.$page	,$data,true); 
		$data['footer'] 	= $this->parser->parse('section/footer'	,$data,true); 
		$data['js'] 		= $this->parser->parse('section/js'		,$data,true); 

		$this->parser->parse('index',$data,false);
	}

	public function data() //menampung data ke view
	{
		$name = $this->security->get_csrf_token_name(); // MENGAKSES security dengan nama token kalau di ctrl=u
		$hash = $this->security->get_csrf_hash();
		$hide =  array($name => $hash, ); //dengan secara tersembunyi security
		$halaman = $this->uri->segment(3);
		$id 	 = $this->uri->segment(4);
		$data['form_input'] = form_open_multipart('admin/insert/'.$halaman,'id="form"',$hide); //men akses data form input dengan id
		$data['form_ubah'] 	= form_open_multipart('admin/update/'.$halaman.'/'.$id,'id="form"',$hide); 
		$data['form_login'] = form_open_multipart('cek_login','id="form"');
		//setting auto load dulu setiap data = form_open_multipart
		$data['form_upload'] = form_open_multipart('admin/upload/', 'id="form"',$hide);//upload	
		//id = use ajax kebalakang
		$data['ubah'] 		= isset($id) ? $this->{$halaman}->ubah($id) : ''; //mengambil id di function ubah 
		$data['halaman'] 	= site_url('halaman').'/'; //url halaman
		$data['admin'] 		= site_url('admin').'/';
		$data['index'] 		= site_url();
		$data['user']		= $this->user->tampil(); //mengambiul dari function post_data/models
		$data['buku']		= $this->buku->tampil(); ////mengambiul dari function post_data/models
		$data['pengunjung']		= $this->pengunjung->tampil();//mengambiul dari function post_data/models
		 $data['pengunjung_join']  =$this->pengunjung->tampil_join(); //$data['pengunjung_join']  =$this->pengunjung->tampil_join(); = data dri pengunjung join ini di model penugnjung dan di funcion tampil join
		
		return $data;
	}

	public function temp($page='home') //template data / awal
	{
		$data = $this->data();
		$data['judul'] = $page;
		
		$data['meta'] 		= $this->parser->parse('section/meta'	,$data,true); 
		$data['css'] 		= $this->parser->parse('section/css'	,$data,true);  //merubah 3x dg array pertama
		$data['flash'] 		= $this->parser->parse('section/flash'	,$data,true); 
		$data['nav' ]		= $this->parser->parse('section/nav'	,$data,true); 
		$data['header'] 	= $this->parser->parse('section/header'	,$data,true); 
		$data['konten'] 	= $this->parser->parse('page/'.$page	,$data,true); 
		$data['footer'] 	= $this->parser->parse('section/footer'	,$data,true); 
		$data['js'] 		= $this->parser->parse('section/js'		,$data,true); 

		$this->parser->parse('index',$data,false);

	
	}

	public function back($page='home') //template admin
	{
		$data = $this->data();
		$data['judul'] = $page;

		$data['meta'] 		= $this->parser->parse('admin/section/meta',$data,true); 
		$data['css'] 		= $this->parser->parse('admin/section/css',$data,true); 
		$data['nav'] 		= $this->parser->parse('admin/section/nav',$data,true); 
		$data['sidebar'] 	= $this->parser->parse('admin/section/sidebar',$data,true); 
		$data['header'] 	= $this->parser->parse('admin/section/header',$data,true); 
		$data['flash'] 		= $this->parser->parse('admin/section/flash',$data,true); 
		$data['konten'] 	= $this->parser->parse('admin/page/'.$page,$data,true); 
		$data['footer'] 	= $this->parser->parse('admin/section/footer',$data,true); 
		$data['js'] 		= $this->parser->parse('admin/section/js',$data,true); 

		$this->parser->parse('admin/index',$data,false);
	}

	public function do_upload()//untuk upload gambar function dan di atas ugak
	{
		$config['upload_path'] = './assets/upload/';//mengatur gmbar di simpan
		$config['allowed_types']	= 'gif|jpg|png';
		$config['overwrite']		= 'TRUE';
		//menentukan ektensi
		//$config['max_width']		= '1024';//menentukan lebar
		//$config['max_height']		= '768';//menentukan tinggi

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar')){ //ini ada di aaray 
			//echo $this->upload->display_errors();
			return FALSE;	
		} else {
			return TRUE;
			//echo "sukses";
		}
	}

	public function log_in()
	{
		$data = $this->data();
		$data['judul'] = 'login';

		$data['meta'] 		= $this->parser->parse('login/section/meta',$data,true); 
		$data['css'] 		= $this->parser->parse('login/section/css',$data,true); 
		$data['js'] 		= $this->parser->parse('login/section/js',$data,true); 
		
		$this->parser->parse('login',$data,false);
	}

	public function log_out() // kiirm ke controller auth
	{
		$this->session->session_destroy();
	}

	public function elol()
	{
		$data=$this->data();
		$data['judul'] = 'elol';

		$data['meta'] 		= $this->parser->parse('login/section/meta',$data,true); 
		$data['css'] 		= $this->parser->parse('login/section/css',$data,true); 

		$this->parser->parse('errors404',$data,false);
	}

}