<?php
require_once __DIR__ . '/../config/db.php';

class Matkul {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT mk.*, d.nama_dosen FROM mata_kuliah mk JOIN dosen d ON mk.id_dosen = d.id_dosen");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($nama_matkul, $kode_matkul, $id_dosen) {
        $stmt = $this->db->prepare("INSERT INTO mata_kuliah (nama_matkul, kode_matkul, id_dosen) VALUES (?, ?, ?)");
        return $stmt->execute([$nama_matkul, $kode_matkul, $id_dosen]);
    }

    public function update($id, $nama_matkul, $kode_matkul, $id_dosen) {
        $stmt = $this->db->prepare("UPDATE mata_kuliah SET nama_matkul = ?, kode_matkul = ?, id_dosen = ? WHERE id_matkul = ?");
        return $stmt->execute([$nama_matkul, $kode_matkul, $id_dosen, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM mata_kuliah WHERE id_matkul = ?");
        return $stmt->execute([$id]);
    }
}
?>
