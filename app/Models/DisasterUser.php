<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterUser extends Model
{
    use HasFactory;
    protected $table = 'disaster_user';
    protected $guarded = [
        'id',
    ];
}
