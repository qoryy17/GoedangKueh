<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('customer/V_beranda');
    }
}
