<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isCompany',
        'image',
        'first_name',
        'last_name',
        'business_name',
        'resume',
        'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Skill
    public function skills(){
        return $this->hasMany(Skill::class,'applicant_id','id');
    }

    //Job
    public function jobs(){
        return $this->hasMany(Job::class,'company_id','id')->orderBy('id', 'desc');
    }

    //checkApplication
    public function checkApplication($id){
        if (ApplicantHasApply::where('applicant_id', $this->id)->where('job_id', $id)->exists()) {
            return ApplicantHasApply::where('applicant_id', $this->id)->where('job_id', $id)->first();
        }
    }

    //Application
    public function application(){
        return $this->hasMany(ApplicantHasApply::class,'applicant_id','id')->orderBy('id', 'desc');
    }
}
