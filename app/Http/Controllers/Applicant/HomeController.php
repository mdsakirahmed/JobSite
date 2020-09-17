<?php

namespace App\Http\Controllers\Applicant;

use App\ApplicantHasApply;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->get();
        return view('applicant.home.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'resume'  => 'required|exists:jobs,id',
        ]);

        if (auth()->user()->checkApplication($request->input('resume'))){
            return response()->json([
                'type' => 'warning',
                'message' => 'Already application submitted',
            ]);
        }
        $application = new ApplicantHasApply();
        $application->job_id        = $request->input('resume');
        $application->applicant_id  = auth()->user()->id;
        $application->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully application submitted',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * @return mixed
     */
    //getJobData
    public function getJobData(Request $request){
        request()->validate([
            'id'  => 'required|exists:jobs,id',
        ]);
        return Job::find($request->input('id'));
    }
}
