<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function upload(Request $request)
    {
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('images'), time().'_'.$f->getClientOriginalName());
            }
        }
        return "Успех";
    }
}

