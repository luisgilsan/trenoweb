<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Nombre:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="name" class="form-control" type="text" value="{{$category->name}}">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Descripción:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="description" class="form-control" type="text" value="{{$category->description}}" >
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <label class="font-bold-treno">Imagen principal:</label>
                <input type="file" name="image" id="picture"   
                data-initial-preview="{{ Storage::disk('public')->exists("images/categories/$name_image")  
                ? Storage::url("images/categories/$name_image") : False }}"/>
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>


