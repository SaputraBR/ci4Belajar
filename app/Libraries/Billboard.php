<?php namespace App\Libraries;

class billboard
{
    public function billboard(array $params)
    {
        return view('widget/billboard', $params);
    }
}