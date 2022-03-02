<h1>{{ $modo }}  Daily Activities</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <ul>
            @foreach( $errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="Tarea"> Tarea </label>
    <input type="text" class="form-control" name="Tarea" value="{{ isset($record->Tarea)?$record->Tarea:old('Tarea') }}" id="Tarea">
</div>
<div class="form-group">
    <label for="Description"> Description </label>
    <input type="text" class="form-control" name="Description" value="{{ isset($record->Description)?$record->Description:old('Description') }}" id="Description">
</div>
<div class="form-group">
    <label for="Status"> Status </label>
    <select name="Status" class="form-control" value="{{ isset($record->Status)?$record->Status:old('Status') }}" id="Status">
        <option value="creada">Creada</option>
        <option value="en proceso">En Proceso</option>
        <option value="realizada">Realizada</option>
    </select>
</div>
<div class="form-group">
    <label for="Star_date"> Start_date </label>
    <input type="date" class="form-control" name="start_date" required value="{{ isset($record->start_date)?$record->start_date:old('start_date') }}" id="Start_date">
</div>
<div class="form-group">
    <label for="End_date"> End_date </label>
    <input type="date" class="form-control" name="end_date" required value="{{ isset($record->end_date)?$record->end_date:old('end_date') }}" id="End_date">
</div>
<input class="btn btn-success" type="submit" value="{{$modo}} Datos">

<a class="btn btn-primary" href="{{ url('daily-actv/') }}">Regresar</a>
