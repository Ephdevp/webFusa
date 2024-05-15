@extends('backOffice.layouts.layout')

@section('title', 'Catalogue Create | Admin')

@section('main')
    <div class="container w-50">
        <label class="mb-2">Guardar nuevo producto</label>
        <div class="card">
            <div class="card-body">
                <form action="{{route('back_office.createCatalogue')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre_prod" aria-describedby="helpId"
                            placeholder="" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Linea de Producto</label>
                        <select class="form-select form-select-lg" name="categoria_prod">
                            <option value="Ferretería_general_y_accesorios">Ferretería general y accesorios</option>
                            <option value="Medios_de_protección_y_seguridad_y_accesorios">Medios de protección y seguridad y accesorios</option>
                            <option value="Sistemas_eléctricos_y_de_iluminación_y_accesorios">Sistemas eléctricos y de iluminación y accesorios</option>
                            <option value="Pinturas_barnices_y_diluentes_y_accesorios">Pinturas barnices y diluentes y accesorios</option>
                            <option value="Sistema_de_estantería_metálica_y_accesorios">Sistema de estantería metálica y accesorios</option>
                            <option value="Sistemas_ligeros_de_construcción_y_accesorios">Sistemas ligeros de construcción y accesorios</option>
                            <option value="Materiales_para_la_construcción_impermeabilizantes_y_accesorios">Materiales para la construcción impermeabilizantes y accesorios</option>
                            <option value="Cerrajería_y_accesorios">Cerrajería y accesorios</option>
                            <option value="Sistemas_hidráulicos_sanitarios_de_fluido_industrial_y_accesorios">Sistemas hidráulicos sanitarios de fluido industrial y accesorios</option>
                            <option value="Sistemas_de_cubiertas_y_accesorios">Sistemas de cubiertas y accesorios</option>
                            <option value="Sistemas_de_clima_y_refrigeración_y_accesorios">Sistemas de clima y refrigeración y accesorios</option>
                            <option value="Material_Poligráfico">Material Poligráfico</option>
                            <option value="Material_de_oficina">Material de oficina</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Precio CUP</label>
                        <input type="text" class="form-control" name="precio_cup" aria-describedby="helpId"
                            placeholder="" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Precio USD</label>
                        <input type="text" class="form-control" name="precio_usd" aria-describedby="helpId"
                            placeholder="" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="imagen_url" placeholder="" aria-describedby="fileHelpId" />
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Registrar</button>
                    <a class="btn btn-danger" href="{{route('back_office.getCatalogue')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
