<?php

namespace App\Observers;

use App\Models\HeadOfSecretariat;

class HeadOfSecretariatObserver
{
    /**
     * Handle the HeadOfSecretariat "created" event.
     *
     * @param  \App\Models\HeadOfSecretariat  $headOfSecretariat
     * @return void
     */
    public function saving(HeadOfSecretariat $headOfSecretariat)
    {
        $this->translate($headOfSecretariat);
    }

    private function translate(HeadOfSecretariat $headOfSecretariat)
    {
        if (empty($headOfSecretariat->okrug_ru)) { $headOfSecretariat->okrug_ru = $headOfSecretariat->okrug_uz; }
        if (empty($headOfSecretariat->fullname_ru)) { $headOfSecretariat->fullname_ru = $headOfSecretariat->fullname_uz; }

        if (empty($headOfSecretariat->okrug_en)) { $headOfSecretariat->okrug_en = $headOfSecretariat->okrug_uz; }
        if (empty($headOfSecretariat->fullname_en)) { $headOfSecretariat->fullname_en = $headOfSecretariat->fullname_uz; }
    }
}
