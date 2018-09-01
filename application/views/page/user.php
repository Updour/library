
<table class="table table-bordered table-striped table-responsive" style="background-color: #e3e3e3"  >

    <thead>
        <tr>
            <th>Nama</th>
            <th>Password</th>
            <!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>
        {user}
        <tr>
            <td>{username}</td>
            <td>{password}</td>
            <!-- <td>
                <a href="<?=site_url('hapus/user/{pk_user}') ?>">Hapus</a>
                <a href="<?=site_url('ubah/user/{pk_user}') ?>">Ubah</a>
            </td> -->
        </tr>
        {/user}
    </tbody>
</table>    
