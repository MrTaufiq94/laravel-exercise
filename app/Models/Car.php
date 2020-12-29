<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'colour', 'owner','price','attachment'];

    // one training belongs to a user -FK
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
