<?php
class DashboardController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        $data = [
            'user' => $_SESSION['user']
        ];

        $this->view('dashboard', $data);
    }
}
