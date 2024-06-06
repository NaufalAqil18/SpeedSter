<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        return view('support');
    }
}

class InstagramController extends Controller
{
    public function index()
    {
        return view('instagram');
    }
}

class TermsController extends Controller
{
    public function index()
    {
        return view('terms');
    }
}

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
}