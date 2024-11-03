<h2>Tambah Peminjaman Barang</h2>
<form action="<?= base_url('peminjaman_barang/store') ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" required><br>
    <label>Nama Peminjam:</label>
    <input type="text" name="nama_peminjam" required><br>
    <label>Tanggal Peminjaman:</label>
    <input type="date" name="tanggal_peminjaman" required><br>
    <button type="submit">Simpan</button>
</form>
