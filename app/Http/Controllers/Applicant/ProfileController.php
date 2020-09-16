<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return auth()->user();
        }else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->file('image') && !$request->file('resume')){
            return response()->json([
                'type' => 'warning',
                'message' => 'Empty input field',
            ]);
        }
        if ($request->file('image')) {
            request()->validate([
                'image'  => 'image',
            ]);
            $image = $request->file('image');
            $destinationPath = public_path(). '/uploads/images/';
            $imageName = 'image-'.auth()->user()->id.'-'.auth()->user()->first_name.'-'.$image->getClientOriginalName();
            $request->file('image')->move($destinationPath, $imageName);
            auth()->user()->image = $imageName;
        }

        if ($request->file('resume')) {
            request()->validate([
                'resume'  => 'mimes:doc,docx,pdf,max:5000',
            ]);
            $resume = $request->file('resume');
            $destinationPath = public_path(). '/uploads/resumes/';
            $resumeName = 'resume-'.auth()->user()->id.'-'.auth()->user()->first_name.'-'.$resume->getClientOriginalName();
            $request->file('resume')->move($destinationPath, $resumeName);
            auth()->user()->resume = $resumeName;
        }
        auth()->user()->save();
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
}
