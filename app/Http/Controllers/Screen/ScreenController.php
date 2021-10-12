<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Models\ScreenModel;

class ScreenController extends Controller
{
    public function screen(){
        return response()->json(ScreenModel::orderBy('id', 'asc')->get(),200);
    }

    public function screenById($id){
        return response()->json(ScreenModel::find($id),200);
    }

    public function screenSave(Request $req){
        $screen = ScreenModel::create($req->all());
        return response()->json($screen,201);
    }
    public function screenEdit(Request $req, ScreenModel $screen){
        $screen->update($req->all());
        return response()->json($screen,200);
    }
    public function screenDelete(Request $req, ScreenModel $screen){
        $screen->delete();
        return response()->json('',204);
    }
}
