


<div class="form-row">
    <div class="col">
        {{ Form::label('user_id','Usuario') }}
        {!! Form::select('user_id',  $vect,null,
        ['placeholder'=>'Selecciona un usuario','class' => 'custom-select','required' => True]); !!}
    </div>
    <div class="col">
        {{ Form::label('partner_user_id','Asesor') }}
        {!! Form::select('partner_user_id',  $vect,null,
        ['placeholder'=>'Selecciona un asesor','class' => 'custom-select','required' => True]); !!}
    </div>
</div>

<br/>

<div class="form-group row">
    <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha de la sesión</label>
    <div class="col-10">
      <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
    </div>
</div>

{{-- <div class="form-group row">
    {{ Form::datetime('visivel_Ini', \Carbon\Carbon::now(), ['class'=>'form-control']) }}
</div> --}}


<hr />
<div class="form-group">
    <ul class="list-unstyled">

        <div class="form-row">
            <div class="col-1">
            </div>
            <div class="col-11">
              <label style="font-weight: bold;">Variables:</label>
            </div>
        </div>

        @foreach ($units as $unit)


        <div class="form-row">
            <div class="col-2">
            </div>
            <div class="col-3">
                <label>
                    {{ $unit->name }}
                    <em> ({{ $unit->description ?: 'Sin descripción' }}) </em>:
                </label>
            </div>
            <div class="col-4">
                {{-- <input type="text" class="form-control" placeholder="Valor medido"> --}}
                {{ Form::text('username[]',null,['class' => 'form-control','required' => True]) }}
            </div>
            <div class="col-2">
                <label>
                    {{ $unit->prefix }}.
                </label>
            </div>
            <div class="col-1">
            </div>

        </div>
        @endforeach
    </ul>
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary']) }}
</div>

