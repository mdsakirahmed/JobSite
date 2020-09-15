<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'applicant_id',
        'name',
    ];

    //Applicant
    public function applicant(){
        return $this->belongsTo(User::class,'applicant_id','id');
    }
}
