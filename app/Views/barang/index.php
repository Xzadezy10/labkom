<h2>Daftar Barang</h2>
<a href="<?= base_url('barang/create') ?>">Tambah Barang</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Kondisi</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($barang as $b): ?>
    <tr>
        <td><?= esc($b['id']); ?></td>
        <td><?= esc($b['nama_barang']); ?></td>
        <td><?= esc($b['kondisi']); ?></td>
        <td><?= esc($b['kategori']); ?></td>
        <td>
            <a href="<?= base_url('barang/edit/'.$b['id']); ?>">Edit</a> |
            <a href="<?= base_url('barang/delete/'.$b['id']); ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
