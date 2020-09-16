<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicantHasApply extends Model
{
    protected $fillable = [
        'applicant_id',
        'job_id',
    ];
    //Job
    public function jobs(){
        return $this->belongsTo(Job::class,'job_id','id')->orderBy('id', 'desc');
    }

    //Applicant
    public function applicant(){
        return $this->belongsTo(User::class,'applicant_id','id')->orderBy('id', 'desc');
    }
}
