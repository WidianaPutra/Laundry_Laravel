<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\CookieModel;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $navLinks = [
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
    ];
    public $isLogin;
    public $auth_url;
    public function __construct()
    {
        $this->isLogin = CookieModel::CheckCookie();
        $this->auth_url = session('auth_url');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.navbar', ['navLinks' => $this->navLinks, 'isLogin' => $this->isLogin, 'auth_url' => $this->auth_url]);
    }
}

