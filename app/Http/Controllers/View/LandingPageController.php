<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public $data;
    public function index()
    {
        $this->data = [
            [
                'name' => 'Laundry Cepat',
                'icon' => './assets/icon/laundry.svg',
                'text' => ''
            ],
            [
                'name' => 'Strika Rapi',
                'icon' => './assets/icon/Cloth.svg',
                'text' => ''
            ],
            [
                'name' => 'Paket',
                'icon' => './assets/icon/box.svg',
                'text' => ''
            ]
        ];
        return view('landingPage', ['data' => $this->data]);
    }
}
