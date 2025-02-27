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
            'url' => '/'
        ],
        [
            'name' => 'Laundry',
            'url' => '/'
        ],
        [
            'name' => 'Riwayat',
            'url' => '/'
        ],
        [
            'name' => 'Akun',
            'url' => '/'
        ],
    ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.navbar', ['navLinks' => $this->navLinks]);
    }
}

