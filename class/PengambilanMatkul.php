<?php
require_once __DIR__ . '/../config/db.php';

class PengambilanMatkul {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getAll() {
        $stmt = $this->db->query("
            SELECT pm.*, m.nama, mk.nama_matkul 
            FROM pengambilan_matkul pm
            JOIN mahasiswa m ON pm.id_mahasiswa = m.id_mahasiswa
            JOIN mata_kuliah mk ON pm.id_matkul = mk.id_matkul
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($id_mahasiswa, $id_matkul, $semester) {
        $stmt = $this->db->prepare("INSERT INTO pengambilan_matkul (id_mahasiswa, id_matkul, semester) VALUES (?, ?, ?)");
        return $stmt->execute([$id_mahasiswa, $id_matkul, $semester]);
    }

    public function update($id, $id_mahasiswa, $id_matkul, $semester) {
        $stmt = $this->db->prepare("UPDATE pengambilan_matkul SET id_mahasiswa = ?, id_matkul = ?, semester = ? WHERE id_pengambilan = ?");
        return $stmt->execute([$id_mahasiswa, $id_matkul, $semester, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM pengambilan_matkul WHERE id_pengambilan = ?");
        return $stmt->execute([$id]);
    }
}
?>
