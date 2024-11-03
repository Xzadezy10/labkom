<h2>Tambah Ruangan</h2>
<form action="<?= base_url('ruangan/store') ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama Ruangan:</label>
    <input type="text" name="nama_ruangan" required><br>
    <label>Kapasitas:</label>
    <input type="text" name="kapasitas" required><br>
    <label>Lokasi:</label>
    <input type="text" name="lokasi" required><br>
    <button type="submit">Simpan</button>
</form>
