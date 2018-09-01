<br>
<a href="<?=site_url('admin/input/pengunjung/{pk_pengunjung}') ?>">
    <button class="btn btn-info">
        <i class=" icon-plus-sign icon-white"></i> 
            Tambah Data
    </button>
</a>    
                    <br><br/>
<table class="table table-bordered table-striped" style="background-color: #e3e3e3"  >
	<thead>
		<tr>
			<th>tanggal pengunjung</th>
            <th>buku pinjam</th>
            <th>Photos</th>
           <!--  <th>{pengunjung_join}</th>
            <th>{/pengunjung_join}</th> -->
			<th>Manipulasi Data</th>
		</tr>
	</thead>
	<tbody>
		  {pengunjung}
		<tr> 
			<td>{tanggal_kunjung}</td>
            <td>{buku_pinjam}</td>
            <td><img src="<?=base_url('assets/upload/{gambar}')?>" class="img-responsive" width="100" alt="image"> </td>
        
     <!-- 
         {pengunjung_join} 
            <td>{judul_buku}</td>
                  {/pengunjung_join}<
      -->  
			<td>
                <div class="btn-group">
                     <button data-toggle="dropdown" class="btn btn-warning">Manipulasi Data 
                        <span class="caret"></span>
                     </button>
                    <ul class="dropdown-menu">
                        <li> <a href="<?=site_url('admin/hapus/pengunjung/{pk_pengunjung}') ?>">
                            <button class="btn btn-danger">
                                <i class="icon-remove icon-fire"> </i> 
                                Delete Data
                            </button></a>

                        <li> <a href="<?=site_url('admin/ubah/pengunjung/{pk_pengunjung}') ?>">
                            <button class="btn btn-primary">
                                <i class="icon-edit icon-white"></i> 
                                 Edit Data
                            </button></a>
<!-- 
                        <li> <a href="<?=site_url('admin/input/pengunjung/{pk_pengunjung}') ?>">
                            <button class="btn btn-info">
                                <i class="icon-inbox icon-white"></i> 
                                Input Data
                            </button>
 -->
                            </button><li> <a href="<?=site_url('admin/lihat/pengunjung/{pk_pengunjung}') ?>">
                            <button class="btn btn-success">
                                <i class="icon-eye-open icon-white"></i> 
                                Lihat Data
                            </button> </a>
                    </ul>
                </div>
			</td>
            
		</tr>
		{/pengunjung}
	</tbody>
</table>

