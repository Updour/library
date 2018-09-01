<table class="table table-hover">
    <thead>
        <tr>
            <th>tanggal pengunjung</th>
            <th>buku pinjam</th>
        </tr>
    </thead>
    <tbody>
        {pengunjung}
        <tr>
            <td>{tanggal_kunjung}</td>
            <td>{buku_pinjam}</td>
            <td>
          </td>
        </tr>
        {/pengunjung}
        <th><a href="<?=site_url('admin/daftar/pengunjung/{pk_pengunjung}') ?>" class="btn btn-warning"> Batal </a></th>
    </tbody>
</table>

