<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'BiCreative Official Website',
            'cssPath' => 'assets/dist/css/home.css',
        ];

        return view('v_home', $data);
    }

    public function webDev()
    {
        return view('v_webdev');
    }

    public function video()
    {
        return view('v_videoprod');
    }

    public function mobileApps()
    {
        return view('pg_mobile_apps\v_mobileapps');
    }
}
