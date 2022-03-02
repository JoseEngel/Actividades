<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Tarea' => 'required|string|max:100',
            'Description' => 'required|string|max:100',
            'Status' => 'required|string|max:100',
            'start_date' => 'required|date|after:now',
            'end_date' => 'required|date|after:start_date',
        ];
    }
}
