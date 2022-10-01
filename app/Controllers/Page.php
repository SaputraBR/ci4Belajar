<?php

namespace App\Controllers;

class Page extends BaseController
{

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
    


}

