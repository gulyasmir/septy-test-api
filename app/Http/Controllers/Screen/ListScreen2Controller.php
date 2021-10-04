<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use App\Models\Models\ScreenModel;
use Illuminate\Http\Request;

use App\Models\Models\ListScreen2Model;

class ListScreen2Controller extends Controller
{
    public function list()
    {
        return response()->json(ListScreen2Model::get(), 200);
    }

    public function listById($id){
        return response()->json(ListScreen2Model::find($id),200);
    }

    public function listSave(Request $req){
        $list = ListScreen2Model::create($req->all());
        return response()->json($list,201);
    }
    public function listEdit(Request $req, ListScreen2Model $list){
        $list->update($req->all());
        return response()->json($list,200);
    }
    public function listDelete(Request $req, ListScreen2Model $list){
        $list->delete();
        return response()->json('',204);
    }
}
