<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MistakeCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $mistakeLogo;
    public $href;
    public function __construct($mistakeLogo, $href)
    {
        $this->mistakeLogo = $mistakeLogo;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mistake-card');
    }
}
