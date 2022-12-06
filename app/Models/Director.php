<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $guarded = [];

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

    public function getActivityAttribute($activity){
        switch (app()->getLocale()) {
            case 'en':
                $activity = $this->activity_en;
                break;
            case 'ru':
                $activity = $this->activity_ru;
                break;
            default:
                $activity = $this->activity_uz;
                break;
        }
        $activity = ($activity) ? $activity : $this->activity_uz;
        return $activity;
    }

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

    public function getBiographyAttribute($biography){
        switch (app()->getLocale()) {
            case 'en':
                $biography = $this->biography_en;
                break;
            case 'ru':
                $biography = $this->biography_ru;
                break;
            default:
                $biography = $this->biography_uz;
                break;
        }
        $biography = ($biography) ? $biography : $this->biography_uz;
        return $biography;
    }

    public function getObligationAttribute($obligation){
        switch (app()->getLocale()) {
            case 'en':
                $obligation = $this->obligation_en;
                break;
            case 'ru':
                $obligation = $this->obligation_ru;
                break;
            default:
                $obligation = $this->obligation_uz;
                break;
        }
        $obligation = ($obligation) ? $obligation : $this->obligation_uz;
        return $obligation;
    }

}
