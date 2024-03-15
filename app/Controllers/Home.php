<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'BiCreative Official Website',
            'cssPath' => 'assets/dist/css/home.css',
        ];

        return view('pg_home\v_home', $data);
    }
}
