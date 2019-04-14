<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BlogController extends Controller
{
 
    public function login(){
		return view('halaman');
    }
    
	public function blog(){
		return view('halaman');
	}
 
	public function about(){
		return view('about');
	}
 
	public function post(){
		return view('post');
    }
    
    public function contact(){
		return view('contact');
	}
}