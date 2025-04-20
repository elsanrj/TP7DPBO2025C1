<?php
require_once __DIR__ . '/../config/db.php';

class Dosen {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM dosen");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($nama, $nip, $email) {
        $stmt = $this->db->prepare("INSERT INTO dosen (nama_dosen, nip, email) VALUES (?, ?, ?)");
        return $stmt->execute([$nama, $nip, $email]);
    }

    public function update($id, $nama, $nip, $email) {
        $stmt = $this->db->prepare("UPDATE dosen SET nama_dosen = ?, nip = ?, email = ? WHERE id_dosen = ?");
        return $stmt->execute([$nama, $nip, $email, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM dosen WHERE id_dosen = ?");
        return $stmt->execute([$id]);
    }
}
?>
