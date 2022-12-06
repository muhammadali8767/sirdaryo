<?php

namespace App\Observers;

use App\Models\Senator;

class SenatorObserver
{
    /**
     * Handle the Senator "created" event.
     *
     * @param  \App\Models\Senator  $senator
     * @return void
     */
    public function saving(Senator $senator)
    {
        $this->translate($senator);
    }

    private function translate(Senator $senator)
    {
        if (empty($senator->job_and_position_ru)) { $senator->job_and_position_ru = $senator->job_and_position_uz; }
        if (empty($senator->fullname_ru)) { $senator->fullname_ru = $senator->fullname_uz; }

        if (empty($senator->job_and_position_en)) { $senator->job_and_position_en = $senator->job_and_position_uz; }
        if (empty($senator->fullname_en)) { $senator->fullname_en = $senator->fullname_uz; }
    }
}
