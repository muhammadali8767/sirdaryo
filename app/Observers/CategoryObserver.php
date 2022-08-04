<?php

namespace App\Observers;
use App\Models\Category;

class CategoryObserver
{
    /**
     * Handle the Category "saving" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function saving(Category $category)
    {
        $this->setSlug($category);
        $this->setTitle($category);
    }

    private function setSlug(Category $category)
    {
        if (empty($category->slug)) {
            $category->slug = \Str::slug($category->title_uz);
        }
    }

    private function setTitle(Category $category)
    {
        if (empty($category->title_ru)) {
            $category->title_ru = $category->title_uz;
        }

        if (empty($category->title_en)) {
            $category->title_en = $category->title_uz;
        }
    }
}
