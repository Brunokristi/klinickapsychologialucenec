<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['path', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}