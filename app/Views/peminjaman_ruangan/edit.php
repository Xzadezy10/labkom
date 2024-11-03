<h2>Edit Peminjaman Ruangan</h2>
<form action="<?= base_url('peminjaman_ruangan/update/'.$peminjaman_ruangan['id']) ?>" method="post">
    <?= csrf_field(); ?>
    <label>Nama Ruangan:</label>
    <input type="text" name="nama_ruangan" value="<?= esc($peminjaman_ruangan['nama_ruangan']); ?>" required><br>
    <label>Nama Peminjam:</label>
    <input type="text" name="nama_peminjam" value="<?= esc($peminjaman_ruangan['nama_peminjam']); ?>" required><br>
    <label>Tanggal Peminjaman:</label>
    <input type="date" name="tanggal_peminjaman" value="<?= esc($peminjaman_ruangan['tanggal_peminjaman']); ?>" required><br>
    <button type="submit">Update</button>
</form>
