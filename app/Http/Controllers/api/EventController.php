<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::orderBy("created_at")->get();
        return response()->json($events);
    }
}
