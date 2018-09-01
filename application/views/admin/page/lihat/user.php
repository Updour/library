<table class="table table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <td></td>
            <th></th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        {user}
        <tr>
            <td>{username}</td>
            <td>
            </td>
            <th></th>
            <td>{password}</td>
            <td>
            </td>
        </tr>
        {/user}

        <th><a href="<?=site_url('admin/daftar/user/{pk_user}')?>" class="btn btn-warning">Batal</a></th>
    </tbody>
</table>    
