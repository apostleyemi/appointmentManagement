<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use Illuminate\Support\Facades\Response;

class AuthenticatedSessionController extends Controller
{
   public function __construct()
   {

   }

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        $appointments=Appointment::all();
        if (Auth::check() && Auth::user()->role_id==1) {
            return redirect()->route('admin.dashboard');

        }
        elseif(Auth::check() && Auth::user()->role_id==2)
        {
            return redirect(RouteServiceProvider::HOME);
        }
        else{
            $this->middleware('guest')->except('logout');
        }
        $this->middleware('guest')->except('logout');
       // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
