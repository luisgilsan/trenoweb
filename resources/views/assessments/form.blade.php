

<div class="form-group">
    {{ Form::label('user_id','Usuario') }}
    {!! Form::select('user_id',  $vect,null,
    ['placeholder'=>'Selecciona un usuario','class' => 'custom-select','required' => True]); !!}
</div>

<div class="form-group">
    {{ Form::label('partner_user_id','Asesor') }}
    {!! Form::select('partner_user_id',  $vect,null,
    ['placeholder'=>'Selecciona un asesor','class' => 'custom-select','required' => True]); !!}
</div>

<div class="form-group row">
    <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha de la sesión</label>
    <div class="col-10">
      <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary']) }}
</div>

