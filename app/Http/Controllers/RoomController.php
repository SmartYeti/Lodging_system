<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index (Request $request) {
        return view('pages.room',
        ['test' => 123]
    );
    }
}
