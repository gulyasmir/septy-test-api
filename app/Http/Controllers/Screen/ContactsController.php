<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use App\Models\Models\ScreenModel;
use Illuminate\Http\Request;
use App\Models\Models\ContactsModel;

class ContactsController extends Controller
{
    public function contacts()
    {
        return response()->json(ContactsModel::find(1),200);
    }
    public function contactsById($id){
        return response()->json(ScreenModel::find($id),200);
    }

    public function contactsSave(Request $req){
        $contacts = ScreenModel::create($req->all());
        return response()->json($contacts,201);
    }
    public function contactsEdit(Request $req, screenModel $contacts){
        $contacts->update($req->all());
        return response()->json($contacts,200);
    }
    public function contactsDelete(Request $req, screenModel $contacts){
        $contacts->delete();
        return response()->json('',204);
    }
}
