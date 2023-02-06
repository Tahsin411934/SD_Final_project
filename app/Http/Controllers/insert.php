<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insert extends Controller
{
    public function insert(Request $request){
       
        $insert = new insert;
 
        $insert->name = $request ->name;
        $insert->email = $request ->email;
 
        $insert->save();
    }
}
