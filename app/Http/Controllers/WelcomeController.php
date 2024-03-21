<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
   public function index(){
    return view('welcome');
   }
   public function singup(){
    return view('demo1');
   }
   public function process_singup(Request $request){
    return 'Xin chao '. $request->fname;
   }
}
