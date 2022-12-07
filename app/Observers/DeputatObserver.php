<?php

namespace App\Observers;

use App\Models\Deputat;

class DeputatObserver
{
    /**
     * Handle the Deputat "created" event.
     *
     * @param  \App\Models\Deputat  $deputat
     * @return void
     */
    public function saving(Deputat $deputat)
    {
        $this->translate($deputat);
    }

    private function translate(Deputat $deputat)
    {
        if (empty($deputat->okrug_ru)) { $deputat->okrug_ru = $deputat->okrug_uz; }
        if (empty($deputat->job_and_position_ru)) { $deputat->job_and_position_ru = $deputat->job_and_position_uz; }
        if (empty($deputat->fullname_ru)) { $deputat->fullname_ru = $deputat->fullname_uz; }

        if (empty($deputat->okrug_en)) { $deputat->okrug_en = $deputat->okrug_uz; }
        if (empty($deputat->job_and_position_en)) { $deputat->job_and_position_en = $deputat->job_and_position_uz; }
        if (empty($deputat->fullname_en)) { $deputat->fullname_en = $deputat->fullname_uz; }
    }
}
