<?php

namespace App\Http\Controllers;

use App\Models\PlaceField;
use App\Models\Trx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function order($type){
        $fields = PlaceField::where('field_type',$type)->where('field_number','>=','1')->get();
        return view('client.order',compact('fields'));
    }
    public function confirm($type,$field_id){
        $field = PlaceField::findOrFail($field_id);
        return view('client.confirm',compact('field'));
    }
    public function trx_create($type,$field_id, Request $request){
        $field = PlaceField::findOrFail($field_id);

        $insert = new Trx;
        $insert->code = $this->code_create(Auth::user()->name);
        $insert->user_id = Auth::user()->id;
        $insert->place_id = $field->place->id;
        $insert->place_field_id = $field->id;
        $insert->start = $request->booking_date.' '. $request->start_time;
        $insert->qty = $request->qty;
        $insert->price = $field->price_on_hour;
        $insert->total = $request->qty * $field->price_on_hour;
        $insert->proof = "-";
        $insert->status = 'payment-wait';
        if($insert->save()){
            return redirect(route('payment',$insert->code));
        }
        return abort(404);
    }
    public function trx(){
        $trxes = Trx::where('user_id',Auth::user()->id)->get();
        return view('client.trx',compact('trxes'));
    }
    public function trx_show($trx_code){
        $trx = Trx::findCode($trx_code);
        return view('client.show',compact('trx'));
    }
    public function payment($trx_code){
        $trx = Trx::findCode($trx_code);
        return view('client.payment',compact('trx'));
    }
    public function payment_action($trx_code, Request $request){
        $trx = Trx::findCode($trx_code);
        $trx->proof = $this->file_store($request->file('photo'));
        $trx->status = 'payment-check';
        $trx->save();
        return redirect(route('show',$trx_code));
    }
}
