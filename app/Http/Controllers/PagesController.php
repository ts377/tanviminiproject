<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view('pages.index');
    }
    function about() {
        return view('pages.about');
    }
    function Signin() {
        return view('pages.Signin');
    }
    function SignUp() {
        return view('pages.SignUp');
    }

    function ViewMessages() {
        return view('pages.ViewMessages');
    }

    function Message() {
        return view('pages.Message');
    }
    function Message1() {
        return view('pages.Message1');
    }

    function contact() {
        return view('pages.contact');
    }
    
    function store(Request $request) {

        $name = $request->name;

        return redirect()->route('thanks',['name' => $name ]);
    }
    
    function thanks($name, Request $request) {

        return view('pages.thankyou')->with(compact('name'));
    }

}
