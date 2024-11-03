<h2>Edit Peminjaman Barang</h2>
<form action="<?= base_url('peminjaman_barang/update/'.$peminjaman_barang['id']) ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" value="<?= esc($peminjaman_barang['nama_barang']); ?>" required><br>
    <label>Nama Peminjam:</label>
    <input type="text" name="nama_peminjam" value="<?= esc($peminjaman_barang['nama_peminjam']); ?>" required><br>
    <label>Tanggal Peminjaman:</label>
    <input type="date" name="tanggal_peminjaman" value="<?= esc($peminjaman_barang['tanggal_peminjaman']); ?>" required><br>
    <button type="submit">Update</button>
</form>
