<h2>Riwayat Peminjaman</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Peminjam</th>
        <th>Nama Barang/Ruangan</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
    </tr>
    <?php foreach ($log_peminjaman as $log): ?>
    <tr>
        <td><?= esc($log['id']); ?></td>
        <td><?= esc($log['nama_peminjam']); ?></td>
        <td><?= esc($log['nama_barang_ruangan']); ?></td>
        <td><?= esc($log['tanggal_peminjaman']); ?></td>
        <td><?= esc($log['tanggal_pengembalian']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
