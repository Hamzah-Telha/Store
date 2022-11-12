<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function indexx()
    {
        return view('upload');
    }

    public function upload()
    {
        $path = request()->file('apk')->storeAs('apk', 'MutarrebMobilyPro.apk');
        $appVersion = request()->input('appversion');
        return redirect()->back();
    }
}
