<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function package()
    {
        return view('package');
    }

    public function familyRoom()
    {
        return view('family-room');
    }

    public function lombokRoom()
    {
        return view('lombok-room');
    }

    public function meetingRoom()
    {
        return view('meeting');
    }

    public function swimingPool()
    {
        return view('swimming-pool');
    }

    public function gathering()
    {
        return view('gathering');
    }

    public function outdoorWedding()
    {
        return view('wedding');
    }
}
