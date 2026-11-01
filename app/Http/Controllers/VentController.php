<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vent;

class VentController extends Controller
{
    public function show(Request $request)
    {
        $vent = Vent::inRandomOrder()->firstOrFail();
        return $vent;
    }

    public function store(Request $request)
    {
        $message = $request->input('message');
        $emotion = $request->input('emotion');
        $vent = Vent::create(['message' => $message, 'emotion' => $emotion]);

        return $vent;
    }
}
