<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\ListScreen4Model;

class ListScreen4Controller extends Controller
{
    public function list()
    {
        return response()->json(ListScreen4Model::get(), 200);
    }
}
