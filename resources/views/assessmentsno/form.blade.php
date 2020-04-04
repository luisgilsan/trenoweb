    <div class="form-row">
        <div class="col">
            <label for="user_id"> {{'Usuario'}}  </label>
            <select name="user_id" id="user_id" class="custom-select mr-sm-2"  required>
                <option value="">Selecciona un usuario...</option>
                @foreach ($users as $line)
                    <option value="{{ $line->id }}">{{ $line->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="partner_user_id"> {{'Asesor'}}  </label>
            <select name="partner_user_id" class="custom-select mr-sm-2" id="partner_user_id" required>
                <option value="">Selecciona un asesor...</option>
                @foreach ($users as $line)
                    <option value="{{ $line->id }}">{{ $line->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br/>
    <div class="form-group row">
        <label for="date_register" class="col-2 col-form-label">Fecha de la sesión</label>
        <div class="col-10">
          <input class="form-control" type="datetime-local" name="measurement_date" id="date_register" required>
        </div>
    </div>
    <br/>

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
                <input class="form-control" type="number" placeholder="Ingresa un valor" id="example-number-input" required>

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


    <div class="form-group">
        <label for="exampleInputFile">Foto de perfil</label>
        <div class="col-lg-5">
            <input type="file" name="picture" id="picture"  accept="image/*"/>
        </div>
        <small id="fileHelp" class="form-text text-muted">La imagen seleccionada sera usada para completar tu perfil, sera visible para tus contactos.</small>
    </div>

    
    <button type="submit" class="btn btn-primary">Guardar</button>
    