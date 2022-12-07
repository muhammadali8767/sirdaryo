<?php

namespace App\Observers;

use App\Models\Event;

class EventObserver
{
    /**
     * Handle the Event "created" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function saving(Event $event)
    {
        $this->translate($event);
    }

    private function translate(Event $event)
    {
        if (empty($event->title_ru)) { $event->title_ru = $event->title_uz; }

        if (empty($event->title_en)) { $event->title_en = $event->title_uz; }
    }
}
