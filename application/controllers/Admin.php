<?php
/**
* 
*/
class Admin extends MY_Controller
 {
	
	public function __construct() //AWAL YANG di tampilkan di halaman
	{
		parent:: __construct();
		
	if ($this->session->userdata('status_login')!==TRUE) {
			redirect('login','refresh');
		}
		
 	} //menampilkan halaman admin di login , smentara belum di gunakan karna loginnya kadang bisa n kadang gak bisa
	
	public function index() //yang akan di tampilkan yang awal
	{
		$this->back(); // dan di load di'' function back di MY_Controller
	}

	// public function dashboard($page)
	// {
	// 	$this->back('view/'.$page);
	// }

	public function lihat($page) //di gunakan di folder lihat di view/admin/page/lihat
	{
		$this->back('lihat/'.$page); //ini di load di dalam folder/admin/page/lihat
	}

	public function daftar($page) //function daftar karna yang akan di tampilkan di awal template admin
	{
		$this->back('daftar/'.$page); //ini load di di public function back('folder daftar.di dalam admin')
	}
	

	public function input($page)//input data /isi form
	{
		
		$this->back('input/'.$page);
	}

	public function insert($page)//proses input data from function data // n bisa masukkan gambar
	{ 
	// if ($this->do_upload()) {
		// $file = $this->upload->data('file_name');
		// } else {
		// 	$file = 'gagal upload';
		// }

		// echo $file;

		//$halaman = $this->uri->segment(2);
		 $data 		= $this->post_data(); //menampung dari function data MY_
		 $sql 		= $this->{$page}->insert($data); //mengambil dari function cek sql MY_
		$this->cek_sql($sql,$page); //mengambil dari function cek sql MY
	}

	public function hapus($page,$id) //hapus data dari form admin etc
	{
		$sql 		= $this->{$page}->delete($id); //variabel sql sama dengan variabel ini load d variabel page/n di hapus dengan $id
		$this->cek_sql($sql,$page); //ini di cek sql di my controller ($sql,$page)

	// 	$halaman	= $this->uri->segment(2);// di front aja 
	// 	$id 		= $this->uri->segment(3);
	//	$sql 		= $this->{$page}->delete($id);//nama model berdasarkan isi variabel page.kalau 
		$this->cek_sql($sql,$page);//menggunakan $$sql 		= $this->{$halaman}->delete($id);
	}
	public function ubah($page)//meruabh data dengan template back
	{
		$this->back('ubah/'.$page); //ini d load di view/admin/page/ubah
		//$this->uri->segment(2);
	}

	public function update($page,$id)//update data dengan id (karna di admin jadi drubah semua)
	{
		// $halaman 	= $this->uri->segment(2);
		// $id 		= $this->uri->segment(3);
		$data 		= $this->post_data();
		$sql 		= $this->{$page}->update($id,$data);
		// $this->cek_sql($sql,$page);
		$this->cek_sql($sql,$page);
	}

}

