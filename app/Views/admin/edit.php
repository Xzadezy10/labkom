<h2>Edit Admin</h2>
<form action="<?= base_url('admin/update/'.$admin['id']) ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama:</label>
    <input type="text" name="nama" value="<?= esc($admin['nama']); ?>" required><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?= esc($admin['email']); ?>" required><br>
    <button type="submit">Update</button>
</form>
