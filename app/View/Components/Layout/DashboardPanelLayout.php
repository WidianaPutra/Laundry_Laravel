<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\Component;

class DashboardPanelLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $sidebarDatas;
    public $role;
    public function __construct($sidebarDatas)
    {
        $this->sidebarDatas = $sidebarDatas;
        $this->role = Cookie::get('role');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.dashboard-panel-layout', ['sidebar_datas' => $this->sidebarDatas, 'role' => $this->role]);
    }
}
