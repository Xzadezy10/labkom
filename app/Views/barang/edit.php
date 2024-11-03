<h2>Edit Barang</h2>
<form action="<?= base_url('barang/update/'.$barang['id']) ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" value="<?= esc($barang['nama_barang']); ?>" required><br>
    <label>Kondisi:</label>
    <input type="text" name="kondisi" value="<?= esc($barang['kondisi']); ?>" required><br>
    <label>Kategori:</label>
    <input type="text" name="kategori" value="<?= esc($barang['kategori']); ?>" required><br>
    <button type="submit">Update</button>
</form>
