<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','icon','slug','image'];

    protected static function booted()
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->name);
        });
    }
}
