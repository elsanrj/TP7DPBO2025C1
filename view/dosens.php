<h3>Daftar Dosen</h3>
<a href="view/formDosen.php"><button>Add</button></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($dosen->getAll() as $d): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $d['nama_dosen'] ?></td>
        <td><?= $d['nip'] ?></td>
        <td><?= $d['email'] ?></td>
        <td>
            <a href="view/formDosen.php?id=<?= $d['id_dosen'] ?>"><button>Update</button></a>
            <a href="controller/deleteDosen.php?id=<?= $d['id_dosen'] ?>" onclick="return confirm('Hapus data?')"><button>Delete</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
