<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class testiCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $testiName;
    public $testiTier;
    public function __construct($testiName, $testiTier)
    {
        //
        $this->testiName = $testiName;
        $this->testiTier = $testiTier;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testi-card');
    }
}
