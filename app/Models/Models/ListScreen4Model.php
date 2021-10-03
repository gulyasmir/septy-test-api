<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListScreen4Model extends Model
{
    use HasFactory;
    protected $table = "list_screen4";

    protected $filltable = [
        'id',
        'text',
        'sort_order'
    ];
}
