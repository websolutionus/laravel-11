<?php

namespace App\View\Components\Note;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NoteCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $notes)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.note.note-card');
    }
}
