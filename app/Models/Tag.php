<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}