<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'company_id',
        'title',
        'description',
        'salary',
        'location',
        'country',
    ];

    //Company
    public function company(){
        return $this->belongsTo(User::class,'company_id','id');
    }
    //Applications
    public function applications(){
        return $this->hasMany(ApplicantHasApply::class,'job_id','id')->orderBy('id', 'desc');
    }
}
