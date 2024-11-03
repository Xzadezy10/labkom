<h2>Daftar Peminjaman Ruangan</h2>
<a href="<?= base_url('peminjaman_ruangan/create') ?>">Tambah Peminjaman Ruangan</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Ruangan</th>
        <th>Nama Peminjam</th>
        <th>Tanggal Peminjaman</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($peminjaman_ruangan as $pr): ?>
    <tr>
        <td><?= esc($pr['id']); ?></td>
        <td><?= esc($pr['nama_ruangan']); ?></td>
        <td><?= esc($pr['nama_peminjam']); ?></td>
        <td><?= esc($pr['tanggal_peminjaman']); ?></td>
        <td>
            <a href="<?= base_url('peminjaman_ruangan/approve/'.$pr['id']); ?>">Approve</a> |
            <a href="<?= base_url('peminjaman_ruangan/reject/'.$pr['id']); ?>">Reject</a> |
            <a href="<?= base_url('peminjaman_ruangan/edit/'.$pr['id']); ?>">Edit</a> |
            <a href="<?= base_url('peminjaman_ruangan/delete/'.$pr['id']); ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
