
<table class="table table-bordered table-striped table-responsive" style="background-color: #e3e3e3"  >
    <thead>
        <tr>
            <th>judul buku</th>
            <th>jumlah halaman</th>
            <th>penerbit</th>
            <th>tahun terbit</th>
            <th>kategori</th><!-- 
            <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>
        {buku}
        <tr>
            <td>{judul_buku}</td>
            <td>{jumlah_halaman}</td>
            <td>{penerbit}</td>
            <td>{tahun_terbit}</td>
            <td>{kategori}</td>
            <!-- <td>
                <a href="<?=site_url('hapus/buku/{pk_buku}') ?>">Hapus</a>
                <a href="<?=site_url('ubah/buku/{pk_buku}') ?>">Ubah</a>
            </td> -->
        </tr>
        {/buku}
    </tbody>
</table>    
