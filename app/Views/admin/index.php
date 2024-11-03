<h2>Daftar Admin</h2>
<a href="<?= base_url('admin/create') ?>">Tambah Admin</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($admin as $a): ?>
    <tr>
        <td><?= esc($a['id']); ?></td>
        <td><?= esc($a['nama']); ?></td>
        <td><?= esc($a['email']); ?></td>
        <td>
            <a href="<?= base_url('admin/edit/'.$a['id']); ?>">Edit</a> |
            <a href="<?= base_url('admin/delete/'.$a['id']); ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
