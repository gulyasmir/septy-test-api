<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    use HasFactory;
    protected $table = "contacts";

    protected $fillable = [
        'id',
        'address',
        'whatsapp',
        'email',
        'site'
    ];
}
