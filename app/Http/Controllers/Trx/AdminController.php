<?php

namespace App\Http\Controllers\Trx;

use App\Http\Controllers\AdminController as AC;
use App\Models\Trx;
use Illuminate\Http\Request;

class AdminController extends AC
{
    public function index(){
        $trxes = Trx::all();
        return view('admin.trx.index',compact('trxes'));
    }
    public function show($placeCode){
        
    }
    public function update($code){
        $trx = Trx::findCode($code);
        return view('admin.trx.update',compact('trx'));
    }
    public function update_action($code, Request $request){
        $trx = Trx::findCode($code);
        $trx->status = $request->status;
        if($trx->save()){
            return back()->with('success','Success change "'.$trx->code.'" Status!');
        } 
    }
}
