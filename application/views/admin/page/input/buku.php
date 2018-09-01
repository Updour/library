{form_input}<!-- iini bersifat finamis karna akan menggantikan form action
<form action="{index}insert/buku" method="POST" role="form" > -->
	<legend>Form Input Buku</legend>

	<div class="form-group">
		<label for="">judul buku</label>
		<input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" name="judul_buku" placeholder="masukkan judul buku">
	</div>

	<div>
		<label for="">Jumlah Halaman</label>
		<input type="text" onkeyup="this.value = this.value.toUpperCase()"  class="form-control" name="jumlah_halaman" placeholder="masukkan jumlah halaman">
	</div>
	
	<div>
		<label for="">Penerbit</label>
		<input type="text" onkeyup="this.value = this.value.toUpperCase()"  class="form-control" name="penerbit" placeholder="masukkan penerbit">
	</div>
	
	<label for="">Tahun Terbit</label>
	 	<div class="form-group input-group">

        	<span class="input-group-addon" >Tahun</span>
           		<select class="form-control" name="tahun_terbit"  >
					<option>PILIH TAHUN TERBIT BUKU</option>
					<option>2017</option> <option>2016</option>
					<option>2015</option> <option>2014</option>
					<option>2013</option><option>2012</option><option>2011</option>
					<option>2010</option><option>2009</option><option>2008</option>
					<option>2007</option><option>2006</option><option>2005</option>
					<option>2004</option><option>2003</option><option>2002</option>
					<option>2001</option><option>2000</option><option>1999</option>
					<option>1998</option><option>1997</option><option>1996</option>
					<option>1995</option><option>1994</option><option>1993</option> 
					<option>1992</option><option>1991</option><option>1990</option>
					<option>1989</option><option>1988</option><option>1987</option>
					<option>1986</option><option>1985</option><option>1984</option> 
					<option>1983</option><option>1982</option><option>1981</option>
					<option>1980</option><option>1979</option><option>1978</option>
					<option>1976</option><option>1975</option><option>1974</option>
					<option>1974</option><option>1973</option><option>1972</option>
					<option>1971</option><option>1970</option><option>1969</option>
					<option>1968</option><option>1967</option><option>1966</option> 	 
				</select>
			<span class="input-group-addon">Masehi</span>                               
	</div>
            
	
	<div>
		<label for="">Kategori</label>
		<input type="text" onkeyup="this.value = this.value.toUpperCase()"  class="form-control" name="kategori" placeholder="masukkan kategori">
	</div>
<br/>
	<div>              
        <span class="btn btn-file btn-success">
        	<span class="fileupload-new icon-plus-sign " > Pilih Gambar</span><input type="file" name="gambar" >
    </span>
    </div>

<br/>
	<button type="submit" class="btn btn-primary">Input Buku</button>
	<th><a href="<?=site_url('admin/daftar/buku/{pk_buku}')?>" class="btn btn-warning">Batal Input</a></th>
</form>

