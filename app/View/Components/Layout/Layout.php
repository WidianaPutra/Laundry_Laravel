<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $showNavbar;
    public function __construct($title = 'Atelier Laundry', $navbar = 'show')
    {
        $this->title = $title;
        $this->showNavbar = $navbar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.layout', ['title' => ucwords($this->title), 'navbar' => $this->showNavbar]);
    }
}
