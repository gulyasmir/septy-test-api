<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreenModel extends Model
{
    use HasFactory;

    protected $table = "screen";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'text',
        'img'
    ];
}
