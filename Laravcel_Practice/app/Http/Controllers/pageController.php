<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\user;
use App\passport;

class pageController extends Controller
{
    public function welcome(){
    	$lara = 'Lara';
		$vel = ['v', 'e', 'l'];
		return view('welcome', compact('lara', 'vel'));
    }

    public function about(){
    	$a = "About Us";
		return view('about', compact('a'));
    }

    public function contact(){
    	$ami = 'Contact Page';
		$tumi = ['Con', ' Ta', ' Ct'];
		return view('contact', compact('ami', 'tumi'));
    }

    public function join(){
    	$join = 'Join';
    	return view('join', compact('join'));
    }

}
