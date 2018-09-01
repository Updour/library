{form_input}
	<legend>Form Input pengunjung</legend>

	<div class="form-group">
		<label for="">tanggal Pengunjung</label>
		<input type="date" onkeyup="this.value = this.value.toUpperCase()"  class="form-control" name="tanggal_kunjung" placeholder="Input tanggal_kunjung">
	</div>

	<div class="form-group">
		<label for="">Buku Pinjaman</label>
		<input type="text" onkeyup="this.value = this.value.toUpperCase()"  class="form-control" name="buku_pinjam"  placeholder="Input buku yang di pinjam">
	</div>
<div>              
        <span class="btn btn-file btn-success ">
        	<span class="fileupload-new  icon-plus-sign" > Pilih Gambar</span>
        	<input type="file" name="gambar" >
    </span>
    </div><br/>
    <!-- 
	 <div class="form-group">
		<label>Daftar Buku Pinjaman</label>
			<select class="form-control" name="pk_buku" >
				{pengunjung_join}
					<option  value="{pk_buku}" >{judul_buku}</option>
				{/pengunjung_join}
			</select>
	</div> -->
	<button type="submit" class="btn btn-primary">Input Pengunjung</button>
	<th><a href="<?=site_url('admin/daftar/pengunjung/{pk_pengunjung}')?>" class="btn btn-warning">Batal Input</a></th>

</form>