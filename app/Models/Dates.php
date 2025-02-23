<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dates extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $table = 'dates';

    protected $fillable = [
        'date',
        'text',
    ];
}
