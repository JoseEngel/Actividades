@extends('Tabla1.resources.views.layouts.plantilla')
@section('title', 'Inicio')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered caption-top">

                    <caption>List of table2</caption>
                    <thead class="thead-light">
                    <tr>
                        <th>Tarea</th>
                        <th>Start_date</th>
                        <th>End_date</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach( $records as $daily)
                        <tr>
                            <td>{{ $daily-> Tarea}}</td>
                            <td>{{ $daily-> start_date}}</td>
                            <td>{{ $daily-> end_date}}</td>
                            <td>
                                <a href="{{ url('/daily-actv/'.$daily->id.'/edit') }}" class="btn btn-warning">
                                    Editar
                                </a>
                                |
                                <form action="{{ url('/daily-actv/'.$daily->id) }}" class="d-inline" method="post">
                                    @csrf
                                    {{ method_field('DELETE')}}
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Eliminar')" value="Borrar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $records->links() !!}
            </div>
        </div>
    </div>
@endsection
