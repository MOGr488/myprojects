<?php

namespace App\View\Components\Project;

use Illuminate\View\Component;

class ProjectStatus extends Component
{
    public $stat;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($stat)
    {
        $this->stat = $stat;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project.project-status');
    }
}
