<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('actors', compact('actors'));
    }

    public function show(Actor $actor)
    {
        return view('actor', compact('actor'));
    }
}
