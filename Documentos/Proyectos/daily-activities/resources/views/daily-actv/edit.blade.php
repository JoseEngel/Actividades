@extends('layouts.plantilla')
@section('title', 'Edit')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('/daily-actv/'.$record->id ) }}" method="post">
                    @csrf
                    {{ method_field('PATCH') }}

                    @include('daily-actv.form',['modo'=>'Editar'])

                </form>
            </div>
        </div>
    </div>
@endsection
