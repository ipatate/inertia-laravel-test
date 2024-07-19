<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {
        return Inertia::render('About/Index', [
            'name' => 'John Doe',
            'age' => 30,
        ]);
    }
}
