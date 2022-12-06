<?php

namespace App\Observers;

use App\Models\Director;

class DirectorObserver
{
    /**
     * Handle the Director "created" event.
     *
     * @param  \App\Models\Director  $director
     * @return void
     */
    public function saving(Director $director)
    {
        $this->translate($director);
    }

    private function translate(Director $director)
    {
        if (empty($director->job_title_ru)) { $director->job_title_ru = $director->job_title_uz; }
        if (empty($director->fullname_ru)) { $director->fullname_ru = $director->fullname_uz; }
        if (empty($director->biography_ru)) { $director->biography_ru = $director->biography_uz; }
        if (empty($director->obligation_ru)) { $director->obligation_ru = $director->obligation_uz; }
        if (empty($director->activity_ru)) { $director->activity_ru = $director->activity_uz; }

        if (empty($director->job_title_en)) { $director->job_title_en = $director->job_title_uz; }
        if (empty($director->fullname_en)) { $director->fullname_en = $director->fullname_uz; }
        if (empty($director->biography_en)) { $director->biography_en = $director->biography_uz; }
        if (empty($director->obligation_en)) { $director->obligation_en = $director->obligation_uz; }
        if (empty($director->activity_en)) { $director->activity_en = $director->activity_uz; }
    }
}
