<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function mata_pelajaran()
    {
        return view('mata_pelajaran');
    }

    public function contact()
    {
        return view('contact');
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

    public function search()
    {
        return view('search');
    }

    public function register()
    {
        return view('register');
    }

}

