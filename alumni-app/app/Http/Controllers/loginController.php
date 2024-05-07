<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class loginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Customize the username field if needed
    public function username()
    {
        return 'email';
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended($this->redirectPath())->with('status', 'Login successful!');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')->withErrors([
            $this->username() => trans('auth.failed'),
        ]);
    }
}
