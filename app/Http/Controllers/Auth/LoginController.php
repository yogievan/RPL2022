<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Illuminate\Http\Request;
use Auth;

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

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:manajer')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => md5($request->password)], $request->get('remember'))) {

            return redirect()->intended('/DashboardAdmin');
        }
        return redirect()->intended('/admin/Login');
    }

    public function showManajerLoginForm()
    {
        return view('auth.login', ['url' => 'manajer']);
    }
    public function manajerLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('manajer')->attempt(['username' => $request->username, 'password' => md5($request->password)])) {

            return redirect()->intended('/DashboardManajer');
        }
        return back()->withInput($request->only('username'));
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
 
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        
        $user=User::firstOrCreate([
            'nama_user' => $user->getName(),
            'email' => $user->getEmail(),
            'provider_id' => $user->getId(),
        ]);
        Auth::login($user,true);
        return redirect('/DashboardCustomer');
        // $user->token;
    }
}
