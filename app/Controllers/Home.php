<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index()
    {
        $home = new AdminModel();

        $data['belajar'] = $home->where('status', 'published')->findAll();

        echo view('index', $data);
    }

    public function post($slug)
    {
        $home = new AdminModel();

        $data['belajar'] = $home->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        echo view('post', $data);
    }
}
