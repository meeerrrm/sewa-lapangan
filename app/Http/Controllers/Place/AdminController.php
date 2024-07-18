<?php

namespace App\Http\Controllers\Place;

use App\Http\Controllers\AdminController as AC;
use App\Http\Requests\PlaceCreateRequest;
use App\Http\Requests\PlaceFieldCreateRequest;
use App\Http\Requests\PlaceFieldUpdateRequest;
use App\Http\Requests\PlaceUpdateRequest;
use App\Models\Place;
use App\Models\PlaceField;
use App\Models\Trx;
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
        $place = Place::findCode($code);
        $facilities = json_decode($place->facilities);

        return view('admin.place.update',compact('place','facilities'));
    }
    public function update_action($code,PlaceUpdateRequest $request){
        $validate = $request->validated();

        $old = Place::findCode($code);
        if(empty($old)){ return redirect(route('admin.place.index',))->with('error','Orginal Data Not Found!'); }

        $validate['facilities'] = json_encode($validate['facilities']);
        $validate['photo'] = $request->file('photo') ? $this->file_store($request->file('photo')): $old->photo;

        Place::where('id',$old->id)->update($validate);
        return redirect(route('admin.place.show',$code))->with('success','Success Update Place');
    }
    public function delete($code){
        $place = Place::findCode($code);
        PlaceField::where('place_id',$place->id)->delete();
        Trx::where('place_id',$place->id)->delete();
        $place->delete();
        
        return back();
    }
    public function show($code){
        $place = Place::findCode($code);
        return view('admin.place.show',compact('place'));
    }
    public function field_create($code){
        $listType = ['Basket','Futsal','Badminton'];
        $place = Place::findCode($code);
        return view('admin.place.field_create',compact('listType','place'));
    }
    public function field_create_action($code,PlaceFieldCreateRequest $request){
        $place = Place::findCode($code);

        $validate = $request->validated();
        $validate['place_id'] = $place->id;
        
        PlaceField::create($validate);
        
        return redirect(route('admin.place.show',$code))->with('success','Success Add Field Type!');
    }
    public function field_update($code,$id){
        $place = Place::findCode($code);
        $field = PlaceField::findOrFail($id);

        return view('admin.place.field_update',compact('place','field'));
        
    }
    public function field_update_action($code,$id,PlaceFieldUpdateRequest $request){
        $validate = $request->validated();
        $old = PlaceField::where('id',$id)->first();
        if(empty($old)){ return redirect(route('admin.place.show',[$code]))->with('error','Orginal Data Not Found!'); }

        PlaceField::where('id',$id)->update($validate);

        return redirect(route('admin.place.show',$code))->with('success','Success Update Field');
    }
    public function field_total_action($code,$field_id,$type){
        $update = PlaceField::findOrFail($field_id);

        if($type == "plus"){ $update->field_number++; }else{ $update->field_number--; }
        if($update->save()){
            return redirect(route('admin.place.show',$code))->with('success','Success Update Total Field!');
        }
    }
    
}
