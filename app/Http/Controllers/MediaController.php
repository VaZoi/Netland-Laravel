<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('medias', compact('media'));
    }

    public function show(Media $media)
    {
        return view('media', compact('media'));
    }
}
