<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FaqController extends BaseController
{
    public function index()
    {
        $session = session(); // Menginisialisasi session

        return view('v_faq');
    }
}
