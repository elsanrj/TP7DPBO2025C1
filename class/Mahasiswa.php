<?php
require_once __DIR__ . '/../config/db.php';

class Mahasiswa {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM mahasiswa");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($nama, $nim, $email) {
        $stmt = $this->db->prepare("INSERT INTO mahasiswa (nama, nim, email) VALUES (?, ?, ?)");
        return $stmt->execute([$nama, $nim, $email]);
    }

    public function update($id, $nama, $nim, $email) {
        $stmt = $this->db->prepare("UPDATE mahasiswa SET nama = ?, nim = ?, email = ? WHERE id_mahasiswa = ?");
        return $stmt->execute([$nama, $nim, $email, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM mahasiswa WHERE id_mahasiswa = ?");
        return $stmt->execute([$id]);
    }
}
?>