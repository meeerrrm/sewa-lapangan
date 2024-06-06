<?php

namespace App\Http\Controllers;

class Controller
{
    public function landingPage(){
        return view('welcome');
    }
    public function code_create($name){
        $words = explode(" ", $name);
        $acronym = "";

        foreach ($words as $w) {
            $acronym .= strtoupper(mb_substr($w, 0, 1));
        }
        return $acronym.time();
    }
    public function file_store($file, $folder = "images"){
        $original_name = rand(100000,999999).'.'.$file->extension();
        $file->storeAs('public/'.$folder,$original_name);
        return $original_name;
    }
}
