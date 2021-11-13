<?php

namespace App\Http\Controllers\Api\Screen;

use App\Http\Controllers\Api\Controller;
use App\Models\Models\ListScreen2Model;
use Illuminate\Http\Request;

use App\Models\Models\ListScreen3Model;

class ListScreen3Controller extends Controller
{
    public function list()
    {
        return response()->json(ListScreen3Model::orderBy('sort_order', 'asc')->get(), 200);
    }

    public function listById($id){
        return response()->json(ListScreen3Model::find($id),200);
    }

    public function listSave(Request $req){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $list = ListScreen3Model::create($req->all());
        return response()->json($list,201);
    }
    public function listEdit(Request $req, ListScreen3Model $list){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $list->update($req->all());
        return response()->json($list,200);
    }
    public function listDelete(Request $req, ListScreen3Model $list){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $list->delete();
        return response()->json('',204);
    }
}
