<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = "contact";

    protected $fillable = [
        'id',
        'address',
        'whatsapp',
        'email',
        'site'
    ];
}
