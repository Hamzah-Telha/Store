<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            try{
                $isAdmin = auth()->user()->id;
                $is_admin = false;
                if($isAdmin == 1){
                    $is_admin = true;
                }

                $request->session()->put('isAdmin', $is_admin);
                return redirect()->route('/employee');
            }

            catch(\Exception $e){
                return back()->with('failed','Incalid email or password')->withInput($request->only('email'));
            }
        }
        return back()->with('failed','Incalid email or password')->withInput($request->only('email'));
    }
}