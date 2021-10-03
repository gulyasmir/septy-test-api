<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Models\ListScreen2Model;

class ListScreen2Controller extends Controller
{
    public function list()
    {
        return response()->json(ListScreen2Model::get(), 200);
    }
}
