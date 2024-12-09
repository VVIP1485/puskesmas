<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function login()
    {
        // Jika sudah login, arahkan ke dashboard
        if (session()->has('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        return view('login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            session()->set([
                'isLoggedIn' => true,
                'userId' => $user['id'],
                'username' => $user['username'],
            ]);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
