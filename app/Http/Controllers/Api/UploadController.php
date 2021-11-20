<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function image(Request $request)
    {
        $request->validate([
            'files'   => ['required', 'array'],
            'files.*' => ['required', 'image','min:5','max:5000']
        ]);

        $uploadedFiles = [];

        foreach ($request->file('files') as $file) {
            $fileName = bcrypt(microtime()) . "." . $file->getClientOriginalExtension();
         //   $file->move('/uploads', $fileName);
            array_push($uploadedFiles, "/uploads/{$fileName}");
        }

        return response($uploadedFiles);
    }
}
