<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListScreen2Model extends Model
{
    use HasFactory;
    protected $table = "list_screen2";

    protected $fillable = [
        'id',
        'text',
        'img',
        'sort_order'
    ];
}
