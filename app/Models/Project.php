<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','location','description','slug'];

    protected static function booted()
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->name);
        });
    }
}
