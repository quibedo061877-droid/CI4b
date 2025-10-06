<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class About extends BaseController
{
    public function index()
    {
        return view('about_message');
    }

    public function about_us()
    {
        return view('about_us');
    }
}
