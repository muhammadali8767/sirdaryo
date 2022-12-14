<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InNumbers extends Model
{
    use HasFactory;
    protected $guarded = [];
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

    public function getSubTitleAttribute($sub_title){
        switch (app()->getLocale()) {
            case 'en':
                $sub_title = $this->sub_title_en;
                break;
            case 'ru':
                $sub_title = $this->sub_title_ru;
                break;
            default:
                $sub_title = $this->sub_title_uz;
                break;
        }
        $sub_title = ($sub_title) ? $sub_title : $this->sub_title_uz;
        return $sub_title;
    }
}
