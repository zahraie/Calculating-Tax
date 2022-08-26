<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function counties()
    {
        return $this->hasMany(Country::class);
    }

    public function taxes()
    {
        return $this->hasManyThrough(Tax::class,County::class);
    }

}
