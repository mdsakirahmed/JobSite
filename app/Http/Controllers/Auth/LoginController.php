<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //Over write login
    public function login(Request $request)
    {
        $this->validateLogin($request);

        //Many time wrong login try
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if($this->guard()->validate($this->credentials($request))) {
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if($request->ajax()){
                return response()->json([
                    'type' => 'success',
                    'message' => 'Login success',
                ]);
            }else{
                session()->flash('message', 'Login success.');
                session()->flash('type', 'success');
            }

            //Company
            if (auth()->user()->isCompany == 1) {
                return redirect(route('company.dashboard'));
            }
            //Applicant
            if (auth()->user()->isCompany == 0) {
                return redirect(route('applicant.home.index'));
            }
            //Unknown type
            else{
                if($request->ajax()){
                    return response()->json([
                        'type' => 'danger',
                        'message' => 'Non-permitted role',
                    ]);
                }else{
                    session()->flash('message', 'Non-permitted role.');
                    session()->flash('type', 'danger');
                }
                Auth::logout();
                return redirect('/login');
            }
        } else {
            if($request->ajax()){
                return response()->json([
                    'type' => 'warning',
                    'message' => 'Credentials do not match our database',
                ]);
            }else{
                session()->flash('message', 'Credentials do not match our database.');
                session()->flash('type', 'warning');
            }
            $this->incrementLoginAttempts($request);
            return redirect()->back();
        }
    }

}
