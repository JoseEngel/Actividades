<?php

namespace App\Http\Controllers;

use App\Models\DailyActv;
use App\Http\Requests\ActividadRequest;

class DailyActvController extends Controller
{
    protected $resource = 'daily-actv';
    public function index()
    {
        return view("$this->resource.index", [
            'records' => DailyActv::orderBy('end_date')->paginate(5),
            'resource' => $this->resource,
        ]);
    }

    public function create()
    {
        return view("$this->resource.create");
    }

    public function store(ActividadRequest $request)
    {
        $message = 'Actividad registrada con éxito';
        if (! DailyActv::create($request->validated())) {
            $message = 'Actividad no registrada, contacte a soporte';
        }
        return  redirect($this->resource)->with('mensaje', $message);
    }

    public function show(DailyActv $dailyActv)
    {
    }

    public function edit($id)
    {
        return view('daily-actv.edit', [
            'record' => DailyActv::findOrFail($id),
            'resource' => $this->resource,
        ]);
    }

    public function update(ActividadRequest $request, DailyActv $dailyActv)
    {
        $message = 'Actividad actualizada con éxito';
        if (! $dailyActv->update($request->validated())) {
            $message = 'Actividad no actualizada, contacte a soporte';
        }
        return redirect('daily-actv')->with('mensaje', $message);
    }

    public function destroy($id)
    {
        DailyActv::destroy($id);
        return redirect('daily-actv')->with('mensaje', 'Actividad Eliminada Con Éxito');
    }
}
