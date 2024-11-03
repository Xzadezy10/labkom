<h2>Edit Ruangan</h2>
<form action="<?= base_url('ruangan/update/'.$ruangan['id']) ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama Ruangan:</label>
    <input type="text" name="nama_ruangan" value="<?= esc($ruangan['nama_ruangan']); ?>" required><br>
    <label>Kapasitas:</label>
    <input type="text" name="kapasitas" value="<?= esc($ruangan['kapasitas']); ?>" required><br>
    <label>Lokasi:</label>
    <input type="text" name="lokasi" value="<?= esc($ruangan['lokasi']); ?>" required><br>
    <button type="submit">Update</button>
</form>
