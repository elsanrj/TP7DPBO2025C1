<h3>Daftar Mahasiswa</h3>
<a href="view/formMahasiswa.php"><button>Add</button></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($mahasiswa->getAll() as $m): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['email'] ?></td>
        <td>
            <a href="view/formMahasiswa.php?id=<?= $m['id_mahasiswa'] ?>"><button>Update</button></a>
            <a href="controller/deleteMahasiswa.php?id=<?= $m['id_mahasiswa'] ?>" onclick="return confirm('Yakin hapus?')"><button>Delete</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
