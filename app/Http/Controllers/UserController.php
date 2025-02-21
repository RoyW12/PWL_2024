<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function profile($id,$nama){
    //     return view('POS.profile');
    //     }
    public function profile($id,$nama){
        return view('POS.profile')
        ->with('id',$id)
        ->with('name',$nama);
        }
}
