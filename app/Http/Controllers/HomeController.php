<?php

namespace App\Http\Controllers;

use App\Models\People;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home/Index', [
            'people' => People::all()
        ]);
    }
}
