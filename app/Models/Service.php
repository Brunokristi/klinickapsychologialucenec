<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'icon'];

    public static function getAllNames(): array {
        return self::select('id', 'name')->get()->toArray();
    }
}
