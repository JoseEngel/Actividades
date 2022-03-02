@extends('layouts.plantilla')
@section('title', 'Create')
@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
        <form action="{{ url('/daily-actv') }}" method="post">

            @csrf
            @include('daily-actv.form',['modo'=>'Crear'])


        </form>
    </div>
</div>
</div>
@endsection
