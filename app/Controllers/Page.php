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

        return view('pg_home\v_home', $data);
    }

    public function designGraphics()
    {
        return view('pg_design\v_design');
    }

    public function socialMediaMarketing()
    {
        return view('pg_social\v_social');
    }

    public function webDev()
    {
        return view('pg_web_developer\v_webdev');
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
