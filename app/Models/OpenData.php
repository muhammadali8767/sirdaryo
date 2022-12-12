<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenData extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    // protected static function boot()
    // {
    //     parent::boot();
    //     self::observe(CategoryObserver::class);
    // }

    public function getTitleAttribute($title){
        switch (app()->getLocale()) {
            case 'en':
                $title = $this->title_en;
                break;
            case 'ru':
                $title = $this->title_ru;
                break;
            default:
                $title = $this->title_uz;
                break;
        }
        $title = ($title) ? $title : $this->title_uz;
        return $title;
    }

}
