<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class National extends Model
{
    use HasFactory;

    public $table = "nationals";

    protected $fillable = [
        'id',
        'name',
    ];
}
