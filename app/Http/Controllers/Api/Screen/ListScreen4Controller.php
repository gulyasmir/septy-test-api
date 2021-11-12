<?php

namespace App\Http\Controllers\Api\Screen;

use App\Http\Controllers\Controller;
use App\Models\Models\ListScreen2Model;
use Illuminate\Http\Request;
use App\Models\Models\ListScreen4Model;

class ListScreen4Controller extends Controller
{
    public function list()
    {
        return response()->json(ListScreen4Model::orderBy('sort_order', 'asc')->get(), 200);
    }

    public function listById($id){
        return response()->json(ListScreen4Model::find($id),200);
    }

    public function listSave(Request $req){
        $list = ListScreen4Model::create($req->all());
        return response()->json($list,201);
    }
    public function listEdit(Request $req, ListScreen4Model $list){
        $list->update($req->all());
        return response()->json($list,200);
    }
    public function listDelete(Request $req, ListScreen4Model $list){
        $list->delete();
        return response()->json('',204);
    }
}
