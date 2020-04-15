<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Nombre:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="name" class="form-control" type="text" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Descripción:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="description" class="form-control" type="text" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">Descripción de venta:</b></p>
    </div>
    <div class="col-md-10"> 
        <input name="sale_description" class="form-control" type="text" required>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Costo:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="cost" class="form-control" type="number" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Precio de venta:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="sale_price" class="form-control" type="number" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Ficha técnica:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="data_sheet_id" class="form-control" type="number" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Codigo:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="code" class="form-control" type="text">
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-md-4"> 
                <p><b class="font-bold-treno">Modelo:</b></p>
            </div>
            <div class="col-md-8"> 
                <input name="model" class="form-control" type="text" >
            </div>
        </div>
         
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label class="font-bold-treno">Imagen principal:</label>
                <input type="file" name="image" id="picture"  accept="image/*"/>
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
            <input name="for_sale" type="checkbox" class="custom-control-input" id="checkSale" value="1">
            <label class="custom-control-label" for="checkSale"></label>
        </div>
    </div>
    <div class="col-md-2"> 
        <p><b class="font-bold-treno">En descuento:</b></p>
    </div>
    <div class="col-md-1"> 
        <div class="custom-control custom-checkbox my-1 mr-sm-2">
            <input name="discount" type="checkbox" class="custom-control-input" id="checkDiscount" value="1">
            <label class="custom-control-label" for="checkDiscount"></label>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>


