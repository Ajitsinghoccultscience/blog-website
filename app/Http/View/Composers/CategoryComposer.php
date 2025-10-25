<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $categories = Category::where('is_active', true)
            ->orderBy('name', 'asc')
            ->get();

        $view->with('navbarCategories', $categories);
    }
}
