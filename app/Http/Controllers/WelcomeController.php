<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
       }
    public function index() {
        return 'Selamat Datang';
       }
    //    public function greeting(){
    //     return view('blog.hello', ['name' => 'Roy']);
    //     }
    public function greeting(){
        return view('blog.hello')
        ->with('name','Andi')
        ->with('occupation','Astronaut');
        }
        
}
