<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function customLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');

        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();

            if($user->is_admin == 1){
                return redirect()->route('admin_home')->with('success','Đăng nhập thành công.');
            }
        }
        else {
            return back()->with('error','Sai email hoặc password .');
        }
    }

    public function dashboard()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login')->with('error', 'Bạn không được phép truy cập.');
    }

    public function signOut()
    { 
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('admin.login'));
    }
}