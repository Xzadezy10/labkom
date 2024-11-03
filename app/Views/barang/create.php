<h2>Tambah Barang</h2>
<form action="<?= base_url('barang/store') ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" required><br>
    <label>Kondisi:</label>
    <input type="text" name="kondisi" required><br>
    <label>Kategori:</label>
    <input type="text" name="kategori" required><br>
    <button type="submit">Simpan</button>
</form>
