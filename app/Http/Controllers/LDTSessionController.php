<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ldtSessionController extends Controller
{
    public function ldtGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT4-LamDucTai"))
        {
            echo "<h2> Session Data:". $request->session()->get("K23CNT4-LamDucTai");
        }
        else
        {
            echo "<h2> Khong co du lieu trong session </h2>";
        }
    }

    public function ldtStoreSessionData(Request $request)
    {
        $request->session()->put('K23CNT4-LamDucTai','K23CNT4 - LamDucTai - 67');
        echo "<h2> Du lieu da dc luu va session </h2>";
    }

    public function ldtDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT4-LamDucTai');
        echo "<h2> Du lieu da dc xoa khoi session </h2>";
    }
}