<br>
<a href="<?=site_url('admin/input/user/{pk_user}') ?>">
    <button class="btn btn-info">
        <i class=" icon-plus-sign icon-white"></i> 
            Tambah Data
    </button>
</a>    
                    <br><br/>
<table class="table table-bordered table-striped" style="background-color: #e3e3e3"  >
    <thead>
        <tr>
            <th>Nama</th>
            <th>Password</th>
            <th>Photos</th>
            <th>Manipulasi Data</th>
        </tr>
    </thead>
    <tbody>
        {user}
        <tr>
            <td>{username}</td>
            <td>{password}</td>
            <td><img src="<?=base_url('assets/upload/{gambar}')?>" width="100" class="img-responsive" alt="image" ></td>
            <td>
                
                <div class="btn-group">
                     <button data-toggle="dropdown" class="btn btn-warning">Manipulasi Data 
                        <span class="caret"></span>
                     </button>
                    <ul class="dropdown-menu">
                        <li> <a href="<?=site_url('admin/hapus/user/{pk_user}') ?>">
                            <button class="btn btn-danger">
                                <i class="icon-remove icon-fire"></i> 
                                Delete Data
                            </button>

                        <li> <a href="<?=site_url('admin/ubah/user/{pk_user}') ?>">
                            <button class="btn btn-primary">
                                <i class="icon-edit icon-white"></i> 
                                 Edit Data
                            </button>

                        <!-- <li> <a href="<?=site_url('admin/input/user/{pk_user}') ?>">
                            <button class="btn btn-info">
                                <i class="icon-inbox icon-white"></i> 
                                Input Data
                            </button> -->

                            </button><li> <a href="<?=site_url('admin/lihat/user/buku/{pk_user}') ?>">
                            <button class="btn btn-success">
                                <i class="icon-eye-open icon-white"></i> 
                                Lihat Data
                            </button>
                    </ul>
                </div>
            </td>
        </tr>
        {/user}
    </tbody>
</table>    
