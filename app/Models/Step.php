<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['number', 'text', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}