<br>
<a href="<?=site_url('admin/input/buku/{pk_buku}') ?>">
    <button class="btn btn-info">
        <i class=" icon-plus-sign icon-white"></i> 
            Tambah Data
    </button>
</a>    
                    <br><br/>
<table class="table table-bordered table-striped" style="background-color: #e3e3e3"  >

    <thead>
        <tr>
            <!-- <th>NO </th> -->
            <th>judul buku</th>
            <th>jumlah halaman</th>
            <th>penerbit</th>
            <th>tahun terbit</th>
            <th>kategori</th>
            <th>Photos</th>
            <th>Manipulasi Data</th>
        </tr>
    </thead>
    <tbody bgcolor="" >
        {buku}
        <tr>
            <!-- <td>{pk_buku}</td> -->
            <td>{judul_buku}</td>
            <td>{jumlah_halaman}</td>
            <td>{penerbit}</td>
            <td>{tahun_terbit}</td>
            <td>{kategori}</td>
            <td><img src="<?=base_url('assets/upload/{gambar}')?>" class="img-responsive" width="100" alt="image"> </td>
            <td>
                <div class="btn-group" >
                     <button data-toggle="dropdown" class="btn btn-warning">Manipulasi Data 
                        <span class="caret"></span>
                     </button>
                    <ul class="dropdown-menu" >
                        <li> <a href="<?=site_url('admin/hapus/buku/{pk_buku}') ?>" >
                            <button class="btn btn-danger">
                                <i class="icon-remove icon-fire"></i> 
                                Delete Data
                            </button>

                        <li> <a href="<?=site_url('admin/ubah/buku/{pk_buku}') ?>">
                            <button class="btn btn-primary">
                                <i class="icon-edit icon-white"></i> 
                                 Edit Data
                            </button>

                       <!--  <li> <a href="<?=site_url('admin/input/buku/{pk_buku}') ?>">
                            <button class="btn btn-info">
                                <i class="icon-inbox icon-white"></i> 
                                Input Data
                            </button> -->

                            </button><li> <a href="<?=site_url('admin/lihat/buku/{pk_buku}') ?>">
                            <button class="btn btn-success">
                                <i class="icon-eye-open icon-white"></i> 
                                Lihat Data
                            </button>
                    </ul>
                </div>
            </td>
        </tr>
        {/buku}
    </tbody>
</table>    
