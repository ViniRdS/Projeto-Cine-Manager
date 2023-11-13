<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListarAdm extends Component
{
    public $reg;
    public function __construct($reg)
    {
        $this->reg = $reg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.listar-adm');
    }
}
