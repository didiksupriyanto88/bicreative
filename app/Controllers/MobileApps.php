<?php

namespace App\Controllers;

class MobileApps extends BaseController
{
    public function index()
    {
        return view('pg_mobile_apps/v_mobileapps');
    }
}
