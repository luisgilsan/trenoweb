<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Nombre:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="name" class="form-control" type="text" value="{{$product->name}}">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Descripción:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="description" class="form-control" type="text" value="{{$product->description}}" >
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Descripción de venta:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="sale_description" class="form-control" type="text" value="{{$product->sale_description}}" >
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Costo:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="cost" class="form-control" type="number" value="{{$product->cost}}" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Precio de venta:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="sale_price" class="form-control" type="number" value="{{$product->sale_price}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Ficha técnica:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="data_sheet_id" class="form-control" type="number" value="{{$product->data_sheet_id}}" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Codigo:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="code" class="form-control" type="text" value="{{$product->code}}">
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Modelo:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="model" class="form-control" type="text" value="{{$product->model}}" >
            </div>
        </div>
         
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label class="font-bold-treno">Imagen principal:</label>
                <input type="file" name="image" id="picture"   
                data-initial-preview="{{ Storage::disk('public')->exists("images/products/$name_image")  
                ? Storage::url("images/products/$name_image") : False }}"/>
            </div>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="offset-md-2 col-md-1"> 
        <p><b class="font-bold-treno">En venta:</b></p>
    </div>
    <div class="col-md-1"> 
        <div class="custom-control custom-checkbox my-1 mr-sm-2">
            <input name="for_sale" type="checkbox" class="custom-control-input" id="checkSale" value="1" {{$product->for_sale ? 'checked' : ''}}>
            <label class="custom-control-label" for="checkSale"></label>
        </div>
    </div>
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">En descuento:</b></p>
    </div>
    <div class="col-md-1"> 
        <div class="custom-control custom-checkbox my-1 mr-sm-2">
            <input name="discount" type="checkbox" class="custom-control-input" id="checkDiscount" value="1" {{$product->discount ? 'checked' : ''}}>
            <label class="custom-control-label" for="checkDiscount"></label>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>


