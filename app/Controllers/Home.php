<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\SearchModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index()
    {
        $home = new AdminModel();

        $data['belajar'] = $home->where(['status' => 'published'/*,'kategori !=' => 'ensiklopedia'*/])->paginate(6, 'pagin');                   
        $data['pager']   = $home->pager;
        $data['page']    = $this->request->getPost('page') ? $this->request->getPost('page') : 1;

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

    public function ensiklopedia()
    {
        $home = new AdminModel();

        $data['belajar'] = $home->where(['status' => 'published', 'kategori =' => 'ensiklopedia'])->paginate(3, 'pagin');                   
        $data['pager']   = $home->pager;
        $data['page']    = $this->request->getPost('page') ? $this->request->getPost('page') : 1;

        echo view("ensiklopedia", $data);
    }

    public function search()
    {   
        $pager  = \Config\Services::pager();
        $model  = new SearchModel();
        $search = $this->request->getGet('search');

        if($search)
        {
            $key  = $model->search($search);
        } else {
            $key  = $model;
        }

        $data['belajar'] = $key->paginate(5, 'pagin');
        $data['pager']   = $model->pager;
        $data['page']    = $this->request->getPost('page') ? $this->request->getPost('page') : 1;

        echo view ('search', $data);
    }
}
