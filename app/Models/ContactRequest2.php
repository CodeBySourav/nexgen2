<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest2 extends Model
{

protected $table = 'contact_requests2';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'subject',
        'preferred_office',
        'message',
    ];
}