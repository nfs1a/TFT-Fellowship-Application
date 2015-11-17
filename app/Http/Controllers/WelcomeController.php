<?php namespace App\Http\Controllers;

class WelcomeController extends Controller{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        //return view('welcome');
        return 'hello world';
    }
    public function contact(){
        //return view('welcome');
        return 'contact me';
    }
}