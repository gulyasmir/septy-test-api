<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function upload(Request $request)
    {
        $uploadedFiles = [];
        $uploadedFile = Request::file(‘files’) ;
      //  foreach ($request->file('files') as $file) {
            $fileName =  $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move('/storage/images/', $fileName);
          //  array_push($uploadedFiles, "/storage/images/{$fileName}");
     //   }

        return response("OK", 200);


    }


}

