<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\ContactsModel;

class ContactsController extends Controller
{
    public function contacts()
    {
        return response()->json(ContactsModel::get(), 200);
    }
}
