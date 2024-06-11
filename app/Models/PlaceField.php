<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceField extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id',
        'field_type',
        'field_number',
        'price_on_hour',
    ];
    public function place(){
        return $this->belongsTo(Place::class);
    }
    public function trx(){
        return $this->hasMany(Trx::class);
    }
}
