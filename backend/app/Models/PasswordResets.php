<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PasswordResets extends Model {
    protected $table = 'password_resets';

    protected $fillable = [
        'email',
        'token',
        'created_at'
    ];
}
