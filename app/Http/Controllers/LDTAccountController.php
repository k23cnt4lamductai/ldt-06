<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ldtAccountController extends Controller
{
    public function ldtLogin()
    {
        return view('ldt-login');
    }

    public function ldtLoginSubmit(Request $request)
    {
        $validation = $request->validate(['ldtemail' => 'required|email','ldtpass' => 'required|min:6']);
        $ldtEmail = $request->input('ldtemail');
        $ldtPass = $request->input('ldtpass');

        $ldtLoginSession = [
            'ldtemail' => $ldtEmail,
            'ldtpass' => $ldtPass
        ];

        $ldt_json = json_encode($ldtLoginSession);

        if($ldtEmail == "ldt@gmail.com" && $ldtPass == "123456abc")
        {
            $request->session()->put('K23CNT4-LamDucTai',$ldtEmail);
            return redirect("/");
        }

        return redirect()->back()->with('ldt-error', 'Loi dang nhap');
    }

    //Logout
    public function ldtLogout(Request $request)
    {
        $request->session()->forget('K23CNT4-LamDucTai');
        $request->session()->flush();
        return redirect('/');
    }
}