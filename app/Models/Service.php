<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'icon', 'category_id'];

    public static function getAllNames()
    {
        return self::select('id', 'name')->get();
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

    public function necessities()
    {
        return $this->hasMany(Necessity::class);
    }

    public function information()
    {
        return $this->hasMany(Information::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public static function getServiceInformation($id)
    {
        return self::with(['tags', 'steps', 'files', 'information', 'necessities'])->findOrFail($id);
    }
}
