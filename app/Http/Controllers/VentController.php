<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VentRequest;
use App\Http\Resource\VentResource;
use App\Models\Vent;

class VentController extends Controller
{
    public function show(Request $request)
    {
        $vent = Vent::inRandomOrder()->firstOrFail();
        return response()->json(['message' => 'Vent shown',
        'data' => VentResource($vent)]);
    }

    public function store(VentRequest $request)
    {
        $message = $request->input('message');
        $emotion = $request->input('emotion');
        $vent = Vent::create(['message' => $message, 'emotion' => $emotion]);

        return response()->json(['message' => 'The vent has been sent',
        'data' => VentResource($vent)]);
    }
}
