<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\Emotion;
use Illuminate\Validation\Rule;

class VentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return ['message' => ['required', 'string', 'max:350'],
        'emotion' => ['required', Rule::enum(Emotion::class)],];
    }
}
