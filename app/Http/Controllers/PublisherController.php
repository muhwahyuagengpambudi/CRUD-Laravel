<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
public static function index()
{
    return view('publisher.all', [
        'publishers' => Publisher::all()
    ]);
}

public static function show(publisher $publishers)
{
    return view('publisher.detail', [
        'public' => $publishers,
    ]);
}
}
