<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public $data;
    public function index()
    {
        $this->data = '
        Seringkah Anda terjebak situasi darurat: pakaian kotor menumpuk sebelum acara penting, atau harus menghadiri meeting bisnis tapi baju andal belum siap dicuci? Ini masalah nyata bagi keluarga sibuk, pelancong dinas, atau tamu hotel yang butuh solusi cepat.
        ';
        return view('landingPage', ['data' => $this->data]);
    }
}
