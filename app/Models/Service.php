<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'icon'];

    public static function getAllNames(): array {
        return self::select('id', 'name')->get()->toArray();
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public static function getServiceInformation($id)
    {
        return self::with(['tags', 'steps', 'files'])->findOrFail($id);
    }
}
