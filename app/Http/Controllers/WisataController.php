<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class WisataController extends Controller
{
    public function login(){
        return view('Login/index');
    }

}