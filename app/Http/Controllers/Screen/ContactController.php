<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use App\Models\Models\ScreenModel;
use Illuminate\Http\Request;
use App\Models\Models\ContactModel;

class ContactController extends Controller
{
    public function contacts()
    {
        return response()->json(ContactModel::find(1),200);
    }
    public function contactsById($id){
        return response()->json(ContactModel::find($id),200);
    }

    public function contactsSave(Request $req){
        $contacts = ContactModel::create($req->all());
        return response()->json($contacts,201);
    }
    public function contactsEdit(Request $req, ContactModel $contacts){
        $contacts->update($req->all());
        return response()->json($contacts,200);
    }
    public function contactsDelete(Request $req, ContactModel $contacts){
        $contacts->delete();
        return response()->json('',204);
    }
}
