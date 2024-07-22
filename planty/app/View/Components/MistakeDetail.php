<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MistakeDetail extends Component
{
    /**
     * Create a new component instance.
     */
    public $mistakeTitle;
    public function __construct($mistakeTitle)
    {
        $this->mistakeTitle = $mistakeTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mistake-detail');
    }
}
