<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deputat extends Model
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

    public function getOkrugAttribute($okrug){
        switch (app()->getLocale()) {
            case 'en':
                $okrug = $this->okrug_en;
                break;
            case 'ru':
                $okrug = $this->okrug_ru;
                break;
            default:
                $okrug = $this->okrug_uz;
                break;
        }
        $okrug = ($okrug) ? $okrug : $this->okrug_uz;
        return $okrug;
    }

    public function getJobAndPositionAttribute($job_and_position){
        switch (app()->getLocale()) {
            case 'en':
                $job_and_position = $this->job_and_position_en;
                break;
            case 'ru':
                $job_and_position = $this->job_and_position_ru;
                break;
            default:
                $job_and_position = $this->job_and_position_uz;
                break;
        }
        $job_and_position = ($job_and_position) ? $job_and_position : $this->job_and_position_uz;
        return $job_and_position;
    }
}
