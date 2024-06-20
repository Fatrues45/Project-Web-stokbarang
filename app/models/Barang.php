<?php

class Barang
{
    private $db;

    public function __construct()
    {
        require_once '../config/database.php';

        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->db->connect_error) {
            die('Connection failed: ' . $this->db->connect_error);
        }
    }

    public function addBarangMasuk($nama_barang, $jumlah, $tanggal_masuk, $keterangan)
    {
        // Tambahkan barang masuk ke tabel barang_masuk
        $stmt = $this->db->prepare("INSERT INTO barang_masuk (nama_barang, jumlah, tanggal_masuk, keterangan) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('siss', $nama_barang, $jumlah, $tanggal_masuk, $keterangan);
        $stmt->execute();

        // Periksa apakah barang sudah ada di tabel stok_gudang
        $stmt = $this->db->prepare("SELECT id, jumlah FROM stok_gudang WHERE nama_barang = ?");
        $stmt->bind_param('s', $nama_barang);
        $stmt->execute();
        $result = $stmt->get_result();
        $barang = $result->fetch_assoc();

        if ($barang) {
            // Jika barang sudah ada, tambahkan jumlahnya
            $new_jumlah = $barang['jumlah'] + $jumlah;
            $stmt = $this->db->prepare("UPDATE stok_gudang SET jumlah = ?, keterangan = ? WHERE id = ?");
            $stmt->bind_param('isi', $new_jumlah, $keterangan, $barang['id']);
            $stmt->execute();
        } else {
            // Jika barang belum ada, tambahkan barang baru ke tabel stok_gudang
            $stmt = $this->db->prepare("INSERT INTO stok_gudang (nama_barang, jumlah, keterangan) VALUES (?, ?, ?)");
            $stmt->bind_param('sis', $nama_barang, $jumlah, $keterangan);
            $stmt->execute();
        }
    }

    public function addBarangKeluar($nama_barang, $jumlah, $tanggal_keluar, $keterangan)
    {
        // Tambahkan barang keluar ke tabel barang_keluar
        $stmt = $this->db->prepare("INSERT INTO barang_keluar (nama_barang, jumlah, tanggal_keluar, keterangan) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('siss', $nama_barang, $jumlah, $tanggal_keluar, $keterangan);
        $stmt->execute();

        // Periksa apakah barang ada di tabel stok_gudang
        $stmt = $this->db->prepare("SELECT id, jumlah FROM stok_gudang WHERE nama_barang = ?");
        $stmt->bind_param('s', $nama_barang);
        $stmt->execute();
        $result = $stmt->get_result();
        $barang = $result->fetch_assoc();

        if ($barang && $barang['jumlah'] >= $jumlah) {
            // Kurangi jumlah barang di stok_gudang
            $new_jumlah = $barang['jumlah'] - $jumlah;
            $stmt = $this->db->prepare("UPDATE stok_gudang SET jumlah = ? WHERE id = ?");
            $stmt->bind_param('ii', $new_jumlah, $barang['id']);
            $stmt->execute();
        } else {
            // Jika jumlah barang tidak mencukupi atau tidak ditemukan, berikan pesan error (dalam implementasi selanjutnya)
            throw new Exception("Jumlah barang tidak mencukupi atau barang tidak ditemukan di stok gudang.");
        }
    }

    public function getStokGudang()
    {
        $result = $this->db->query("SELECT * FROM stok_gudang");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
