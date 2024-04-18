<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
    $events = Event::all(); // Obtén todos los eventos
    return response()->json($events); // Devuelve los eventos en formato JSON
    }

    public function store(Request $request){
    $event = Event::create($request->all());
    return response()->json($event, 201);
    }

public function update(Request $request, Event $event){
    $event->update($request->all());
    return response()->json($event);
    }

public function destroy(Event $event){
    $event->delete();
    return response()->json(null, 204);
    }
}
