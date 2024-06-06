<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trx extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'place_id',
        'place_field_id',
        'start',
        'qty',
        'price',
        'total',
        'proof',
        'status',
    ];
    
    public static function findCode($code){
        return (new static)::where('code',$code)->with('place','place_field','user')->firstOrFail();   
    }
    public function place(){
        return $this->belongsTo(Place::class);
    }
    public function place_field(){
        return $this->belongsTo(PlaceField::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
