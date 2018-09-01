<?php

class Pengunjung extends MY_model
{
	protected $tabel = 'Pengunjung';  //protected $tabel = 'Pengunjung'; dalah sinkat dari tb_pengunjung
	//public function tabel() //kalau menggunakan return $this->db->get($this->tabel())->result();
	// {
	// 	return 'pengunjung'; 
	// } //berada di my_model
	public function tampil_join()
	{

		$this->db->join('tb_buku','tb_buku.pk_buku = tb_pengunjung.pk_buku' );
		return $this->db->get('tb_pengunjung')->result();
	}
} 