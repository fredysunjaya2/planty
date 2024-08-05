<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class modalGeneral extends Component
{
    /**
     * Create a new component instance.
     */
    public $header;
    public $btn;


    public function __construct( $header, $btn, )
    {
        $this->header = $header;
        $this->btn = $btn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-general');
    }
}
