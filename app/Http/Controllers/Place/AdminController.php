<?php

namespace App\Http\Controllers\Place;

use App\Http\Controllers\AdminController as AC;
use App\Http\Requests\PlaceCreateRequest;
use App\Models\Place;
use App\Models\PlaceField;
use Illuminate\Http\Request;


class AdminController extends AC
{
    public function index(){
        $places = Place::get();
        return view('admin.place.index',compact('places'));
    }
    public function create(){
        return view('admin.place.create');
    }
    public function create_action(PlaceCreateRequest $request){
        $validate = $request->validated();

        $validate['code'] = $this->code_create($validate['name']);
        $validate['photo'] = $this->file_store($request->file('photo'));
        $validate['facilities'] = json_encode($validate['facilities']);

        $create = Place::create($validate);

        for($i = 0; $i < count($validate['field_type']); $i++){
            $insert = new PlaceField; 
            $insert->place_id = $create->id;
            $insert->field_type = $validate['field_type'][$i];
            $insert->field_number = $validate['field_number'][$i];
            $insert->price_on_hour = $validate['price_on_hour'][$i];
            $insert->save();
        }

        return redirect(route('admin.place.index'))->with('success','Success Create Place!');
        
    }
    public function update($code){
        
    }
    public function update_action($code,Request $request){
        
    }
    public function delete($code){
        
    }
    public function show($code){
        $place = Place::findCode($code);
        return view('admin.place.show',compact('place'));
    }
    public function field_create_action($code, Request $request){
        
    }
    public function field_update_action($code, Request $request){
        
    }
    public function field_total_action($code,$field_id,$type){
        $update = PlaceField::findOrFail($field_id);

        if($type == "plus"){ $update->field_number++; }else{ $update->field_number--; }
        if($update->save()){
            return redirect(route('admin.place.show',$code))->with('success','Success Update Total Field!');
        }
    }
    public function field_delete_action($code, $field_id){
        
    }
    
}
