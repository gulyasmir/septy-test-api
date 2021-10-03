<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Models\ListScreen3Model;

class ListScreen3Controller extends Controller
{
    public function list()
    {
        return response()->json(ListScreen3Model::get(), 200);
    }
}
