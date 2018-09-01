{form_ubah}
	<legend>Form Input User</legend>
	{ubah}
	<div class="form-group">
		<label for="">username</label>
		<input type="text" class="form-control" name="username" value="{username}" placeholder="Input username">
	</div>

	<div class="form-group">
		<label for="">password</label>
		<input type="password" class="form-control" name="password" value="{username}" placeholder="Input password">
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
        	<span class="fileupload-new icon-plus-sign" >Pilih Gambar</span><input type="file" name="gambar" >
    </span>
    </div>                                             
<br/>
{/ubah}
	<button type="submit" class="btn btn-primary">Input User</button>
	<th><a href="<?=site_url('admin/daftar/user/{pk_user}')?>" class="btn btn-warning">Batal Update</a></th>
</form>