 {form_ubah} <!--mengambil dari MY_Controller // di post data yang di kirim ksini -->
	<legend>Form Input pengunjung</legend>
	{ubah} <!--mengambil dari MY_Controller // di post data yang di kirim ksini -->
	<div class="form-group">
		<label for="">tanggal Pengunjung</label>
		<input type="date" class="form-control" name="tanggal_kunjung" value="{tanggal_kunjung}" placeholder="Input tanggal_kunjung">
	</div>

	<div class="form-group">
		<label for="">Buku Pinjaman</label>
		<input type="text" onkeyup="this.value = this.value.toUpperCase()"  class="form-control" name="buku_pinjam" value="{buku_pinjam}" placeholder="Input buku yang di pinjam">
	</div>

<br/>
	<div >
	    <label class="control-label col-lg-4" >Gambar Upload</label>
	        <div class="col-lg-8">
	            <div class="fileupload fileupload-new" data-provides="fileupload">
	            <div class="fileupload-preview thumbnail" style="width: 164px; height: 186px;"><img src="<?=base_url('assets/upload/{gambar}')?>" width="200"  height="150" class="img-responsive" 		alt="image" >
	            </div>
	        	</div>
	        </div>
	</div>  

	<div>              
        <span class="btn btn-file btn-success">
	            <div class="fileupload fileupload-new icon-plus-sign" data-provides="fileupload">
        	<span class="fileupload-new " >Pilih gambar</span><input type="file" name="gambar" >
    </span>
    </div>                                             
<br/>
	{/ubah}
	<!--  <div class="form-group">
		<label>Daftar Buku Pinjaman</label>
			<select class="form-control" name="pk_buku" >
				{pengunjung_join}
					<option  value="{pk_buku}" >{judul_buku}</option>
				{/pengunjung_join}
			</select>
	</div> -->
		
	<button type="submit" class="btn btn-primary">Update Pengunjung</button>
	<th><a href="<?=site_url('admin/daftar/pengunjung/{pk_pengunjung}')?>" class="btn btn-warning">Batal Update</a></th>
</form>