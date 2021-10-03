<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListScreen3Model extends Model
{
    use HasFactory;
    protected $table = "list_screen3";

    protected $filltable = [
        'id',
        'title',
        'text',
        'sort_order'
    ];
}
