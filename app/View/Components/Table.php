<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public array $headers;
    public string $message;

    /**
     * Create a new component instance.
     */
    public function __construct(array $headers, $message)
    {
        $this->headers = $headers;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.table');
    }
}
