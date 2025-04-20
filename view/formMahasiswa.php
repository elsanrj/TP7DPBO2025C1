<h3><?= isset($data) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' ?></h3>
<form method="POST" action="<?= isset($data) ? '../controller/updateMahasiswa.php' : '../controller/addMahasiswa.php' ?>">
    <?php if (isset($data)): ?>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <?php endif; ?>
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $data['nama'] ?? '' ?>"><br>
    <label>NIM:</label><br>
    <input type="text" name="nim" value="<?= $data['nim'] ?? '' ?>"><br>
    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $data['email'] ?? '' ?>"><br><br>
    <button type="submit"><?= isset($data) ? 'Update' : 'Tambah' ?></button>
</form>
