<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vape extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'type', 'color', 'price'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}