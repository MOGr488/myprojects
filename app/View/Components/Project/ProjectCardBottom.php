<?php

namespace App\View\Components\Project;

use Illuminate\View\Component;

class ProjectCardBottom extends Component
{
   public $project;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($project)
    {
        $this->project = $project;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project.project-card-bottom');
    }
}
