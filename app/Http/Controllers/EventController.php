<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function index()
    {   
        $Events = Events::all();
        return view('welcome',['events' => $Events]);
    }
    public function main()
    {
        $Events = Events::all();
        return view('main',['events' => $Events]);
    }
    public function create()
    {
        return view('events.create');
    }
        public function contact()
    {
        return view('contact');
    }
}
