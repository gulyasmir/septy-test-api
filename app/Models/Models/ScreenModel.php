<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreenModel extends Model
{
    use HasFactory;

    protected $table = "screen";

    protected $filltable = [
        'id',
        'title',
        'text',
        'img'
    ];
}
