<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function upload(Request $request)
    {
       // $uploadedFiles = [];
      //  $file = $request->file;
       // foreach ($request->file('files') as $file) {
         //   $fileName = bcrypt(microtime()) . "." . $file->getClientOriginalExtension();
        //    $file->move('/storage/images', $fileName);
       //     array_push($uploadedFiles, "/storage/images/{$fileName}");
      //  }

      //  return response($uploadedFiles);
        return response($request);
    }
}

