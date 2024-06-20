<?php

class Admin extends Controller
{
    public function login()
    {
        $this->view('admin/login');
    }

    public function loginProcess()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = $this->model('User');
        $user = $userModel->login($username, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            header('Location: /project/public/admin/dashboard');
        } else {
            $this->view('admin/login', ['error' => 'Username atau password salah']);
        }
    }

    public function dashboard()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $userModel = $this->model('User');
            $users = $userModel->getAllUsers();
            $this->view('admin/dashboard', ['user' => $user, 'users' => $users]);
        } else {
            header('Location: /project/public/admin/login');
        }
    }

    public function stokBarang()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $this->view('admin/stokBarang', ['user' => $user]);
        } else {
            header('Location: /project/public/admin/login');
        }
    }

    public function barangMasuk()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $this->view('admin/barangMasuk', ['user' => $user]);
        } else {
            header('Location: /project/public/admin/login');
        }
    }

    public function addBarangMasuk()
    {
        $nama_barang = $_POST['nama_barang'];
        $jumlah = $_POST['jumlah'];
        $tanggal_masuk = $_POST['tanggal_masuk'];
        $keterangan = $_POST['keterangan'];

        $barangModel = $this->model('Barang');
        $barangModel->addBarangMasuk($nama_barang, $jumlah, $tanggal_masuk, $keterangan);

        header('Location: /project/public/admin/stokBarang');
    }

    public function barangKeluar()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $this->view('admin/barangKeluar', ['user' => $user]);
        } else {
            header('Location: /project/public/admin/login');
        }
    }

    public function addBarangKeluar()
    {
        $nama_barang = $_POST['nama_barang'];
        $jumlah = $_POST['jumlah'];
        $tanggal_keluar = $_POST['tanggal_keluar'];
        $keterangan = $_POST['keterangan'];

        $barangModel = $this->model('Barang');
        try {
            $barangModel->addBarangKeluar($nama_barang, $jumlah, $tanggal_keluar, $keterangan);
            header('Location: /project/public/admin/stokBarang');
        } catch (Exception $e) {
            $this->view('admin/barangKeluar', ['user' => $_SESSION['user'], 'error' => $e->getMessage()]);
        }
    }

    public function stokGudang()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $barangModel = $this->model('Barang');
            $stok = $barangModel->getStokGudang();
            $this->view('admin/stokGudang', ['user' => $user, 'stok' => $stok]);
        } else {
            header('Location: /project/public/admin/login');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /project/public/admin/login');
    }

    public function addUser()
    {
        $this->view('admin/addUser');
    }

    public function addUserProcess()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $userModel = $this->model('User');
        $userModel->addUser($username, $password, $role);

        header('Location: /project/public/admin/dashboard');
    }

    public function deleteUser($id)
    {
        $userModel = $this->model('User');
        $userModel->deleteUser($id);

        header('Location: /project/public/admin/dashboard');
    }
}
