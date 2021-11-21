<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function upload(Request $request)
    {
        $path = $request->file('file')->store('images');

        return asset($path);
    }


}

