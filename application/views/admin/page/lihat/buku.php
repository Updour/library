<table class="table table-hover">
    <thead>
        <tr>
            <th>judul buku</th>
            <th>jumlah halaman</th>
            <th>penerbit</th>
            <th>tahun terbit</th>
            <th>kategori</th>
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
            <td>
            </td>
        </tr>
        {/buku}
        <th><a href="<?=site_url('admin/daftar/buku/{pk_buku}')?>" class="btn btn-warning">Batal</a></th>
    </tbody>
</table>    
