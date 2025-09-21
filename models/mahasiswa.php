<?php

class Mahasiswa {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM mahasiswa");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama, $nim) {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nama, nim) VALUES (?, ?)");
        return $stmt->execute([$nama, $nim]);
    }

    public function update($id, $nama, $nim) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama = ?, nim = ? WHERE id = ?");
        return $stmt->execute([$nama, $nim, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }
}