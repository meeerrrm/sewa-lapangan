<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'code',
        'name',
        'maps',
        'phone_number',
        'address',
        'photo',
        'facilities',
    ];

    public static function findCode($code){
        return (new static)::where('code',$code)->firstOrFail();   
    }
    public function field(){
        return $this->hasMany(PlaceField::class);
    }
    public function rating(){
        return $this->hasMany(PlaceField::class);
    }
}
