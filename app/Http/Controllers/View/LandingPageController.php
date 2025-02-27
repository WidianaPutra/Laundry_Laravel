<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public $values;
    public function index()
    {
        $this->values = [
            [
                'name' => 'Proses Cepat',
                'icon' => './assets/icons/time.svg',
                'text' => 'Pakaian bersih dan rapi dalam waktu singkat! Serahkan cucian Anda kepada kami, dan nikmati hasilnya yang segar dan tersetrika sempurna'
            ],
            [
                'name' => 'Baju Rapi',
                'icon' => './assets/icons/Strika.svg',
                'text' => 'Pakaian bersih dan rapi dalam waktu singkat! Serahkan cucian Anda kepada kami, dan nikmati hasilnya yang segar dan tersetrika sempurna'
            ],
            [
                'name' => 'Harga Murah',
                'icon' => './assets/icons/money.svg',
                'text' => 'Pakaian selalu rapi tanpa perlu repot! Layanan setrika profesional dengan harga hemat di kantong'
            ],
            [
                'name' => 'Pakaian Bersih',
                'icon' => './assets/icons/clothes.svg',
                'text' => 'Pakaian bersih, rapi, dan bebas noda untuk tampilan yang selalu sempurna! '
            ],
            [
                'name' => 'Pengiriman Cepat',
                'icon' => './assets/icons/delivery.svg',
                'text' => 'Pakaian bersih, rapi, dan bebas noda untuk tampilan yang selalu sempurna! '
            ],
            [
                'name' => 'Baju Wangi',
                'icon' => './assets/icons/perfume.svg',
                'text' => 'Pakaian Wangi, rapi, dan bebas bau tidak sedap untuk tampilan yang selalu sempurna! '
            ]
        ];
        return view('landingPage', ['values' => $this->values]);
    }
}
