<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getFullnameAttribute($fullname){
        switch (app()->getLocale()) {
            case 'en':
                $fullname = $this->fullname_en;
                break;
            case 'ru':
                $fullname = $this->fullname_ru;
                break;
            default:
                $fullname = $this->fullname_uz;
                break;
        }
        $fullname = ($fullname) ? $fullname : $this->fullname_uz;
        return $fullname;
    }

    public function getJobTitleAttribute($job_title){
        switch (app()->getLocale()) {
            case 'en':
                $job_title = $this->job_title_en;
                break;
            case 'ru':
                $job_title = $this->job_title_ru;
                break;
            default:
                $job_title = $this->job_title_uz;
                break;
        }
        $job_title = ($job_title) ? $job_title : $this->job_title_uz;
        return $job_title;
    }

    // public function getREceptionDayAttribute($reseption_day){
    //     switch (app()->getLocale()) {
    //         case 'en':
    //             $reseption_day = $this->reseption_day_en;
    //             break;
    //         case 'ru':
    //             $reseption_day = $this->reseption_day_ru;
    //             break;
    //         default:
    //             $reseption_day = $this->reseption_day_uz;
    //             break;
    //     }
    //     $reseption_day = ($reseption_day) ? $reseption_day : $this->reseption_day_uz;
    //     return $reseption_day;
    // }
}
