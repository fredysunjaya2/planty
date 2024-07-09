<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tutorCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $catName;
    public function __construct($catName)
    {
        $this->catName = $catName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tutor-card');
    }
}
