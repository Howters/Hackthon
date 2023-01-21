<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $groupName = $request->input('name');
        $password = $request->input('password');
    
        $group = Group::where('name', $groupName)->first();
    
        if ($group && Hash::check($password, $group->password) && $group->isAdmin == 1) {
            Auth::guard('group')->login($group);
            return redirect()->route('adminDashboard');
        } elseif ($group && Hash::check($password, $group->password)){
            Auth::guard('group')->login($group);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput($request->only('name'))->with([
                'login_error' => 'Username or password is incorrect!',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
}
