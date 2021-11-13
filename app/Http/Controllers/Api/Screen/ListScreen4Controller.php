<?php

namespace App\Http\Controllers\Api\Screen;

use App\Http\Controllers\Api\Controller;
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
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $list = ListScreen4Model::create($req->all());
        return response()->json($list,201);
    }
    public function listEdit(Request $req, ListScreen4Model $list){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $list->update($req->all());
        return response()->json($list,200);
    }
    public function listDelete(Request $req, ListScreen4Model $list){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $list->delete();
        return response()->json('',204);
    }
}
