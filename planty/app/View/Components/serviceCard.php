<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class serviceCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $serviceTitle;
    
    public function __construct($serviceTitle)
    {
        $this->serviceTitle = $serviceTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service-card');
    }
}
