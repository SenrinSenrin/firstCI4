<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel; // get model user table in models

class SignupController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        if (isset($_SESSION)){
            return redirect()->to('/Dashboard');
        }
        echo view('Auth/signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('Auth/signup', $data);
        }
          
    }
}
