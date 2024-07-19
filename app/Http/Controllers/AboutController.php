<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {
        return Inertia::render('About/Index', []);
    }

    public function store(Request $request)
    {
        People::create($request->validate([
            'first_name' => ['required', 'max:10'],
            'last_name' => ['required', 'max:10'],
        ]));

        return to_route('home');
    }
}
