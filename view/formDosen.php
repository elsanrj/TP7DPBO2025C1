<h3><?= isset($data) ? 'Edit Dosen' : 'Tambah Dosen' ?></h3>
<form method="POST" action="<?= isset($data) ? '../controller/updateDosen.php' : '../controller/addDosen.php' ?>">
    <?php if (isset($data)): ?>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <?php endif; ?>
    <label>Nama:</label><br>
    <input type="text" name="nama_dosen" value="<?= $data['nama_dosen'] ?? '' ?>"><br>
    <label>NIP:</label><br>
    <input type="text" name="nip" value="<?= $data['nip'] ?? '' ?>"><br>
    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $data['email'] ?? '' ?>"><br><br>
    <button type="submit"><?= isset($data) ? 'Update' : 'Tambah' ?></button>
</form>
