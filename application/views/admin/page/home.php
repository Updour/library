<br>
<table class="table table-bordered table-striped table-responsive" style="background-color: #e3e3e3"  >

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
    </tbody>
</table>    



<br><hr>
<font color="blue">+++++++++==================********************************************************************************************==================+++++++++</font>
    <br><hr>
<legend> Daftar Pengunjung</legend>
</hr>
<table class="table table-bordered table-striped" style="background-color: #e3e3e3"  >
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
    </tbody>
</table>
<br><hr>
<font color="blue">+++++++++==================********************************************************************************************==================+++++++++</font>
    <br><hr>
<legend>Daftar Penguna </legend>
<hr/>
<table class="table table-bordered table-striped" style="background-color: #e3e3e3"  >
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        {user}
        <tr>
            <td>{username}</td>
            <td>{password}</td>
            <td>
            </td>
        </tr>
        {/user}
    </tbody>
</table>
