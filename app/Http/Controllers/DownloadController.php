<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadFile()
    {
        $myFile = storage_path("app/apk/MutarrebMobilyPro.apk");
        $headers = ['Content-Type: application/apk'];
        $newName = 'MutarrebMobilyPro'.'.apk';

        return response()->download($myFile, $newName, $headers);
    }	
}
