<h2>Daftar Peminjaman Barang</h2>
<a href="<?= base_url('peminjaman_barang/create') ?>">Tambah Peminjaman Barang</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Nama Peminjam</th>
        <th>Tanggal Peminjaman</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($peminjaman_barang as $pb): ?>
    <tr>
        <td><?= esc($pb['id']); ?></td>
        <td><?= esc($pb['nama_barang']); ?></td>
        <td><?= esc($pb['nama_peminjam']); ?></td>
        <td><?= esc($pb['tanggal_peminjaman']); ?></td>
        <td>
            <a href="<?= base_url('peminjaman_barang/approve/'.$pb['id']); ?>">Approve</a> |
            <a href="<?= base_url('peminjaman_barang/reject/'.$pb['id']); ?>">Reject</a> |
            <a href="<?= base_url('peminjaman_barang/edit/'.$pb['id']); ?>">Edit</a> |
            <a href="<?= base_url('peminjaman_barang/delete/'.$pb['id']); ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
