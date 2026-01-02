<?php

class AuthController extends Controller
{
    /**
     * Akses /auth via GET → bukan halaman, balik ke portal
     */
    public function index()
    {
        header('Location: /');
        exit;
    }

    /**
     * Proses login (POST)
     */
    public function authenticate()
    {
        // var_dump($_SERVER['REQUEST_METHOD'], $_POST);
        // die;



        // Pastikan POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /');
            exit;
        }

        // Ambil input
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        // Validasi kosong
        if ($email === '' || $password === '') {
            $_SESSION['error'] = 'Email dan password wajib diisi';
            header('Location: /');
            exit;
        }

        $userModel = $this->model('User');
        $user = $userModel->findByEmail($email);


        //cek password
        // var_dump(
        //     $password,
        //     $user['password'],
        //     password_verify($password, $user['password'])
        // );
        // die;


        // User tidak ditemukan / password salah
        if (!$user || !password_verify($password, $user['password'])) {
            $_SESSION['error'] = 'Email atau password salah';
            header('Location: /login');
            exit;
        }


        // Akun tidak aktif
        if ((int)$user['is_active'] !== 1) {
            $_SESSION['error'] = 'Akun tidak aktif, hubungi admin';
            header('Location: /');
            exit;
        }

        // Login sukses → set session user
        $_SESSION['user'] = [
            'id'    => $user['id'],
            'name'  => $user['name'],
            'email' => $user['email'],
            'role'  => $user['role']
        ];

        // Flash message sukses (ditampilkan di dashboard)
        $_SESSION['success'] = 'Login berhasil. Selamat datang, ' . $user['name'] . '.';

        header('Location: /dashboard');
        exit;
    }


    /**
     * Logout
     */
    public function logout()
    {

        session_destroy();
        header('Location: /');
        exit;
    }
}
