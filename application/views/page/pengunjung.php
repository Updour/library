
<table class="table table-bordered table-striped table-responsive" style="background-color: #e3e3e3"  >

	<thead>
		<tr>
			<th>tanggal pengunjung</th>
			<th>buku pinjam</th>
			<!-- <th>Aksi</th> -->
		</tr>
	</thead>
	<tbody>
		{pengunjung}
		<tr>
			<td>{tanggal_kunjung}</td>
			<td>{buku_pinjam}</td>
		<!-- 	<td>
				<a href="<?=site_url('hapus/pengunjung/{pk_pengunjung}') ?>">Hapus</a>
				<a href="<?=site_url('ubah/pengunjung/{pk_pengunjung}') ?>">Ubah</a>
			</td> -->
		</tr>
		{/pengunjung}
	</tbody>
</table>

