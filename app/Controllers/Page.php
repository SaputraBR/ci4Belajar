<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function mata_pelajaran()
    {
        return view('mata_pelajaran');
    }

    public function ensiklopedia()
    {
        return view('ensiklopedia');
    }

    public function lainnya()
    {
        return view('lainnya');
    }

    public function about()
    {
        return view('about');
    }

    public function credit()
    {
        return view('credit');
    }

    public function faqs()
    {
        return view('faqs');
    }
    
    public function post()
    {
        echo view('post');
    }

}

