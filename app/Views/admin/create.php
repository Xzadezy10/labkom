<h2>Tambah Admin</h2>
<form action="<?= base_url('admin/store') ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama:</label>
    <input type="text" name="nama" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <button type="submit">Simpan</button>
</form>
