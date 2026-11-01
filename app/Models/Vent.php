<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Emotion;

class Vent extends Model
{
    protected $fillable = ['emotion', 'message'];
    protected $casts = ['emotion' => Emotion::class];
}
