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
        // Cek apakah NIM sudah ada
        if ($this->isNimExists($nim)) {
            throw new Exception("NIM '$nim' sudah terdaftar!");
        }
        
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nama, nim) VALUES (?, ?)");
        return $stmt->execute([$nama, $nim]);
    }
    
    public function isNimExists($nim) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM mahasiswa WHERE nim = ?");
        $stmt->execute([$nim]);
        return $stmt->fetchColumn() > 0;
    }

    public function update($id, $nama, $nim) {
        // Cek apakah NIM sudah ada di record lain
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM mahasiswa WHERE nim = ? AND id != ?");
        $stmt->execute([$nim, $id]);
        if ($stmt->fetchColumn() > 0) {
            throw new Exception("NIM '$nim' sudah terdaftar!");
        }
        
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama = ?, nim = ? WHERE id = ?");
        return $stmt->execute([$nama, $nim, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }
}