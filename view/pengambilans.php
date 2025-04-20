<h3>Daftar Pengambilan Mata Kuliah</h3>
<a href="../controller/addPengambilanMatkul.php"><button>Add</button></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Mahasiswa</th>
        <th>Mata Kuliah</th>
        <th>Semester</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($pengambilan->getAll() as $p): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $p['nama'] ?></td>
        <td><?= $p['nama_matkul'] ?></td>
        <td><?= $p['semester'] ?></td>
        <td>
            <a href="controller/updatePengambilanMatkul.php?id=<?= $p['id_pengambilan'] ?>"><button>Update</button></a>
            <a href="controller/deletePengambilanMatkul.php?id=<?= $p['id_pengambilan'] ?>" onclick="return confirm('Hapus data?')"><button>Delete</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
