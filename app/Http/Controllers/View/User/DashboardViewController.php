<?php

namespace App\Http\Controllers\View\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CookieModel;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class DashboardViewController extends Controller
{
    public $role = 'user';
    public $view_data = [];
    public $menu;
    private $req;
    public function AuthURL()
    {
        if (!session()->has('auth_url')) {
            session([
                "auth_url" => [
                    'login' => Str::random(50),
                    'register' => Str::random(55),
                    'otp' => Str::random(65),
                    'forget_password' => Str::random(60),
                    'update_password' => Str::random(61)
                ]
            ]);
        }
        $this->role = CookieModel::getCookie("role") ?? 'user';
    }
    public function index(Request $requset)
    {
        $this->req = $requset;
        $this->AuthURL();
        $this->menu = $requset->query('menu');
        $viewData = [
            'user' => $this->LandingPage(),
            'admin' => $this->AdminData(),
            'courier' => $this->CourierData()
        ];

        $views = [
            'admin' => 'admin.dashboard',
            'courier' => 'courier.dashboard',
            'user' => 'users.landingPage'
        ];

        return view($views[$this->role] ?? 'landingPage', $viewData[$this->role]);
    }

    public function AdminData()
    {
        return [
            'table_datas' => [
                'No',
                'Username',
                'Order Status',
                'Total Berat',
                'Payment Status',
                'Total Harga'
            ],
            'sidebar_datas' => [
                ['name' => 'Orders', 'url' => '/', 'icon' => '', 'view' => 'component.'],
                ['name' => 'complated', 'url' => '/?page=complated', 'icon' => '', 'view' => 'component.'],
                ['name' => 'New Order', 'url' => '/?page=addOrder', 'icon' => '', 'view' => 'component.'],
                ['name' => 'Setting', 'url' => '/?page=setting', 'icon' => '', 'view' => 'component.']
            ],
            'menu' => $this->menu,
            'order_datas' => [],
            'qeury_params' => $this->req->query('page')
        ];
    }

    public function CourierData()
    {
        return [
            'table_datas' => [
                'No',
                'Username',
                'No Telfon',
                'Alamat',
                'Status',
            ],
            'sidebar_datas' => [
                ['name' => 'Dashboard', 'url' => '', 'icon' => '', 'view' => 'component.'],
                ['name' => 'Orders', 'url' => '', 'icon' => '', 'view' => 'component.'],
                ['name' => 'Setting', 'url' => '', 'icon' => '', 'view' => 'component.']
            ],
            'menu' => $this->menu,
            'order_datas' => []
        ];
    }

    public function LandingPage()
    {
        return [
            'values' => [
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
            ],
            'footer' => [
                'description' => 'Atelier Laundry adalah layanan laundry profesional yang menawarkan pencucian, pengeringan, dan penyetrikaan pakaian. Kami menggunakan deterjen berkualitas tinggi menjaga kebersihan dan keawetan pakaian pelanggan',
                'social' => [
                    ['name' => 'Instagram', 'icon' => './assets/icons/socials/instagram.svg'],
                    ['name' => 'Facebook', 'icon' => './assets/icons/socials/facebook.svg'],
                    ['name' => 'X', 'icon' => './assets/icons/socials/x.svg'],
                ],
                'contact' => ['Jl. AmbaRuwo No 7, Badung, Bali.', '0858584681007', 'AtelierLaundry@gmail.com'],
                'menus' => [
                    [
                        'name' => 'Beranda',
                        'url' => '/',
                        'icon' => './assets/icons/home.svg',
                    ],
                    [
                        'name' => 'Laundry',
                        'url' => '/',
                        'icon' => './assets/icons/laundry.svg',

                    ],
                    [
                        'name' => 'Riwayat',
                        'url' => '/',
                        'icon' => './assets/icons/history.svg',
                    ],
                    [
                        'name' => 'Akun',
                        'url' => '/',
                        'icon' => './assets/icons/account.svg',
                    ],
                ]
            ],
            'role' => $this->role
        ];
    }
}
