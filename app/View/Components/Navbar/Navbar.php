<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

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
    public function __construct()
    {
        //
    }

    public function getMenu(): array
    {
        return $this->navLinks;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.navbar', ['navLinks' => $this->navLinks]);
    }
}

