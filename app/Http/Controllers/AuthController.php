<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Session;
class AuthController extends Controller
{
    public function login()
    {
        if(Session::has('userrole')){
            return redirect()->to('dashboard');
        }
        return view('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function admin()
    {
        return view('admin.home');
    }
    public function other()
    {
        return view('website.home');
    }
    
    public function loginstore(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = Employee::where('email', '=', $email)
            ->where('password', '=', $password)
            ->first();
        if ($user) {
            //session
            $name = $user->name;
            $role = $user->role;
            Session::put('username', $name);
            Session::put('userrole', $role);
            return redirect()->to('dashboard');
        } else {
            return redirect()->back()->with('msg', 'Invalid email or password');
        }
    }
    public function logout()
    {
        Session::forget(['username', 'userrole']);
        return redirect()->to('login');
    }
}
