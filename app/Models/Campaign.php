<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'nominal',
        'rfm_score',
        'status',
        'category',
        'image',
        'description',
        'label',
        'slug',
        'volunteer_target',
        'activity_date',
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
}
