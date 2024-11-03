<h2>Daftar Ruangan</h2>
<a href="<?= base_url('ruangan/create') ?>">Tambah Ruangan</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Ruangan</th>
        <th>Kapasitas</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($ruangan as $r): ?>
    <tr>
        <td><?= esc($r['id']); ?></td>
        <td><?= esc($r['nama_ruangan']); ?></td>
        <td><?= esc($r['kapasitas']); ?></td>
        <td><?= esc($r['lokasi']); ?></td>
        <td>
            <a href="<?= base_url('ruangan/edit/'.$r['id']); ?>">Edit</a> |
            <a href="<?= base_url('ruangan/delete/'.$r['id']); ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
