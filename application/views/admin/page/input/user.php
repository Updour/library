{form_input}
	<legend>Form Input User</legend>

	<div class="form-group">
		<label for="">username</label>
		<input type="text"   class="form-control" name="username" placeholder="Input username">
	</div>

	<div class="form-group">
		<label for="">password</label>
		<input type="password"  class="form-control" name="password" placeholder="Input password">
	</div>

	<div>              
        <span class="btn btn-file btn-success ">
        	<span class="fileupload-new  icon-plus-sign" > Pilih Gambar</span>
        	<input type="file" name="gambar" >
    </span>
    </div><br/>
	<button type="submit" class="btn btn-primary">Input User</button>
	<th><a href="<?=site_url('admin/daftar/user/{pk_user}')?>" class="btn btn-warning">Batal Input</a></th>
</form>