<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Company
        $company                = new \App\User();
        $company->isCompany     = 1;
        $company->first_name    = 'Mr. Raju';
        $company->last_name     = 'Ahmed';
        $company->business_name = 'NameSpace IT';
        $company->email         = 'raju@gmail.com';
        $company->password      = Hash::make('password');
        $company->save();

        //Applicant
        $applicant              = new \App\User();
        $applicant->isCompany   = 0;
        $applicant->first_name  = 'Ramim';
        $applicant->last_name   = 'Khan';
        //$applicant->resume      = 'default.pgf';
        $applicant->email       = 'ramim@gmail.com';
        $applicant->password    = Hash::make('password');
        $applicant->save();



    }
}
