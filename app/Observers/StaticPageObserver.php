<?php

namespace App\Observers;
use App\Models\StaticPage;

class StaticPageObserver
{
    /**
     * Handle the StaticPage "creating" event.
     *
     * @param  \App\Models\StaticPage  $page
     * @return void
     */
    public function creating(StaticPage $page)
    {
        $this->setUser($page);
    }

    /**
     * Handle the StaticPage "saving" event.
     *
     * @param  \App\Models\StaticPage  $page
     * @return void
     */
    public function saving(StaticPage $page)
    {
        $this->setSlug($page);
        $this->setTitle($page);
    }

    private function setSlug(StaticPage $page)
    {
        if (empty($page->slug)) {
            $page->slug = \Str::slug($page->title_uz);
        }
    }

    private function setTitle(StaticPage $page)
    {
        if (empty($page->title_ru)) {
            $page->title_ru = $page->title_uz;
        }

        if (empty($page->text_ru)) {
            $page->text_ru = $page->text_uz;
        }

        if (empty($page->title_en)) {
            $page->title_en = $page->title_uz;
        }

        if (empty($page->text_en)) {
            $page->text_en = $page->text_uz;
        }
    }

    private function setUser(StaticPage $page)
    {
        $page->user_id = $page->user_id ?? auth()->id();
    }
}
