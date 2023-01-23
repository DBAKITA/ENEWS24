<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   function index() {
    return view('main.index');
   }

   function About () {
    return view('main.about');
   }

   function Contact () {
    return view('main.contact');
   }

   
   function register () {
      return view('main.register');
   }
}
