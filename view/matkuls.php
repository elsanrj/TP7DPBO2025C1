<h3>Daftar Mata Kuliah</h3>
<a href="../controller/addMatkul.php"><button>Add</button></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Mata Kuliah</th>
        <th>Kode</th>
        <th>Dosen</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($matkul->getAll() as $mk): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $mk['nama_matkul'] ?></td>
        <td><?= $mk['kode_matkul'] ?></td>
        <td><?= $mk['nama_dosen'] ?></td>
        <td>
            <a href="controller/updateMatkul.php?id=<?= $mk['id_matkul'] ?>"><button>Update</button></a>
            <a href="controller/deleteMatkul.php?id=<?= $mk['id_matkul'] ?>" onclick="return confirm('Hapus data?')"><button>Delete</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
