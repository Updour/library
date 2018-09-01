<?php
class Kumpulan extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$array = array(
			'nama' => 'rohman'
		);
		
		$this->session->set_userdata( $array );
	}

	public function index()
	{
		$this->template();
	}

	public function uri()
	{
		echo $this->uri->segment(2);
	}

	public function halaman()
	{
		$halaman = $this->uri->segment(2);
		$this->template($halaman);
	}

	public function input()//input data /isi form
	{
		$halaman = $this->uri->segment(2);
		$this->template('input/'.$halaman);
	}

	public function insert()//proses input data from function data
	{
		$halaman = $this->uri->segment(2);
		$data = $this->post_data(); //menampung dari function data MY_
		$sql = $this->{$halaman}->insert($data); //mengambil dari function cek sql MY_
		$this->cek_sql($sql ,$halaman); //mengambil dari function cek sql MY
	}

	public function hapus()	//hapus data form
	{
		$halaman 	= $this->uri->segment(2);
		$id 		= $this->uri->segment(3);
		$sql 		= $this->{$halaman}->delete($id); //nama model berdasarkan isi variabel halaman.kalau 
		$this->cek_sql($sql,$halaman); //menggunakan $$sql 		= $this->{$halaman}->delete($id); 
	}
	// public function delete($id) //di teruskan dri function hapus
	// {
	// 	$this->db->where('pk_'.$this->tabel(), $id);
	// 	return $this->db->delete('tb_'.$this->tabel());
	// }
	
	public function ubah() // merubah suatu data yang akan di ambil database / 
	{
		$halaman = $this->uri->segment(2);
		$this->template('ubah/'.$halaman);
	}

	public function update()//perintah me link dari my_controller/=function data() //wajib route
	{
		$halaman 	= $this->uri->segment(2);
		$id 		= $this->uri->segment(3);
		$data 		= $this->post_data();
		$sql 		= $this->{$halaman}->update($id,$data);
		$this->cek_sql($sql,$halaman);
	}
}