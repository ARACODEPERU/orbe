<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Sales\Entities\SaleProductBrand;

class Brand extends Component
{
    /**
     * Create a new component instance.
     */
    protected $brands;
    public function __construct()
    {
        $this->brands = SaleProductBrand::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.brand',[
            'brands' => $this->brands,
        ]);
    }
}
