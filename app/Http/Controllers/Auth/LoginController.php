<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

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
        $this->middleware('guest:admin')->except('logout');
    }


    public function showAdminLoginForm(){
        // if(Auth::user()){
        //     return redirect()->back();
        // }

        return view('admin.auth.login');
    }

    public function loginAdmin(Request $request){
        $admin = Admin::where('email', $request->email)->first();
        
        if($admin==null)
        {
            return redirect()->route('admin.login')->with('success', 'Logged in not successfully');

        }
        if(Hash::check($request->password, $admin->password))
        {
            Auth::guard('admin')->login($admin);
        }

        return redirect()->route('adminMainCourse');
    }
}
