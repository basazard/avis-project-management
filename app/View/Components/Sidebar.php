<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navigations = [
            'Dashboard' => '/dashboard',
            'Task' => '/task',
            'Project' => '/project',
            'Library' => '/library',
            'Rio' => '/rio',
            'BOM' => '/bom',
            'Drawing' => '/drawing',
            'Lesson Learned' => '/lesson_learned',
            'AV Quality System' => '/av_quality_system',
            'Manufacturing Guideline' => '/manufacturing_guideline',
            'Engineering Change' => '/engineering_change',
            'Design Standard' => '/design_standard',
        ];
        
        return view('components.sidebar', compact('navigations'));
    }
}
