<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $footer = CmsSection::where('component_id', 'footer_area_2')  //siempre cambiar el id del componente
        ->join('cms_section_items', 'section_id', 'cms_sections.id')
        ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
        ->select(
            'cms_items.content',
            'cms_section_items.position'
        )
        ->orderBy('cms_section_items.position')
        ->get();
        //dd($footer);
        // return view('components.jrrss.footer-area', [
        //     'footer' => $footer,
        // ]);
        return view('components.footer', [
            'footer' => $footer,
        ]);
    }
}
