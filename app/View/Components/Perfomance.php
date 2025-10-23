<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSectionItem;

class Perfomance extends Component
{
    /**
     * Create a new component instance.
     */
    protected $perfomance;
    public function __construct()
    {
        $this->perfomance = CmsSectionItem::with('item.items')->where('section_id', 5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.perfomance', [
            'perfomance' => $this->perfomance
        ]);
    }
}
