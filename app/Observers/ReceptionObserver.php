<?php

namespace App\Observers;

use App\Models\Reception;

class ReceptionObserver
{
    /**
     * Handle the Reception "created" event.
     *
     * @param  \App\Models\Reception  $reception
     * @return void
     */
    public function saving(Reception $reception)
    {
        $this->translate($reception);
    }

    private function translate(Reception $reception)
    {
        if (empty($reception->job_title_ru)) { $reception->job_title_ru = $reception->job_title_uz; }
        if (empty($reception->fullname_ru)) { $reception->fullname_ru = $reception->fullname_uz; }

        if (empty($reception->job_title_en)) { $reception->job_title_en = $reception->job_title_uz; }
        if (empty($reception->fullname_en)) { $reception->fullname_en = $reception->fullname_uz; }
    }
}
