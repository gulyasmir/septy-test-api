<?php

namespace App\Http\Controllers\Api\Screen;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Models\Models\ContactModel;

class ContactController extends Controller
{
    public function contacts()
    {
        return response()->json(ContactModel::get(),200);
    }
    public function contactsById($id){
        return response()->json(ContactModel::find($id),200);
    }
    public function contactsSave(Request $req){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $contacts = ContactModel::create($req->all());
        return response()->json($contacts,201);
    }
    public function contactsEdit(Request $req, ContactModel $contacts){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $contacts->update($req->all());
        return response()->json($contacts,200);
    }
    public function contactsDelete(Request $req, ContactModel $contacts){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $contacts->delete();
        return response()->json('',204);
    }
}
