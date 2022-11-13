<?php

namespace App\Http\Controllers;


class UploadController extends Controller
{
    public function indexx()
    {
        return view('upload');
    }

    public function upload()
    {
        $path = request()->file('apk')->storeAs('apk', 'MutarrebMobilyPro.apk');
        $appVersion = request()->input('appVersion');
        return redirect()->back();
    }
}
