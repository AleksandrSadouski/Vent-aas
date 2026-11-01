<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VentRequest;
use App\Http\Resources\VentResource;
use App\Models\Vent;

class VentController extends Controller
{
    public function show(Request $request)
    {
        $vent = Vent::inRandomOrder()->first();

        if(!$vent)
            {
                return response()->json(['message' => 'No vents yet'], 404);
            }

        return response()->json(['message' => 'Vent shown',
        'data' => new VentResource($vent)], 200);
    }

    public function store(VentRequest $request)
    {
        $message = $request->input('message');
        $emotion = $request->input('emotion');
        $vent = Vent::create(['message' => $message, 'emotion' => $emotion]);

        return response()->json(['message' => 'The vent has been sent',
        'data' => new VentResource($vent)], 201);
    }
}
