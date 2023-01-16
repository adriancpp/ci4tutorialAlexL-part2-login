<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];

        //use filters instead of that to protect
        //        if(!session()->get('isLoggedIn'))
        //            redirect()->to('/');

        echo view('templates/header', $data);
        echo view('dashboard', $data);
        echo view('templates/footer', $data);
    }
}
