<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\MessageModel;
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

        $user = new MessageModel();
        $data['komen'] = $user->comment_post($slug);

        echo view('post', $data);
    }

    function comment_add() {
		if('post' === $this->request->getMethod() && $this->request->getPost('message')) {
            $id_post = $this->request->getPost('id_post');
            $id_main = $this->request->getPost('id_main');
            $message = $this->request->getPost('message');
            $tipe    = $this->request->getPost('tipe');
            $email   = $this->request->getPost('email');
            $nama    = $this->request->getPost('nama');
            $data = array(
                'message' => $message,
                'id_main' => $id_main,
                'id_post' => $id_post,
                'email'   => $email,
                'nama'    => $nama,
                'tipe'    => $tipe,
            );
			
			$model = new MessageModel();
			
            $resp = $model->comment_add($data);
			
			helper("custom");
			
            if ($resp != NULL) {
                foreach ($resp as $row) {
                    $date = mysql_to_php_date($row->dibuat);
                    echo "<li class='col-12 col-lg-12 col-md-12 col-sm-12 pb-2 pt-2 mb-3 ml-auto bg-komentar' id='li_comment_{$row->id_comment}>".
                    "<p class='border-bottom'>{$row->nama}(<small><i>{$row->email}</i></small>) <small class='float-right'>{$date}}</small></p>".
                    "<p class='ml-2'>{$row->message}</p>".
                    "<a href='#' class='ml-2 balas' id='{$row->id_comment}'><button class='btn btn-primary'>Balas</button></a>".
                    "</li>";
                }
            } else {
                echo 'Error in adding comment';
            }
        } else {
            echo 'Error: Please enter your comment';
        }
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



    /*function komentar()
    {
        $model = new MessageModel();
        $data['komen'] = $model->findAll();
        $model->insert([
            "tipe" => $this->request->getPost('tipe'),
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "message" => $this->request->getPost('message'),
            "id_post" => $this->request->getPost('id_post'),
        ]);
            
        return komentar();
    }*/
}