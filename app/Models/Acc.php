<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acc extends Model
{
    use HasFactory;

    public $table = 'account';

    protected $fillable = [

        'username',
        'password',
        'name',
        'role',
    ];
}
