@extends('layouts.app')

@section('content')
<!-- categoria, alertanivel, aula, descripcion -->

                    <div class="card-body">
                        <form action="">
                            <div class="form-group"><br>
                                <label for="category_id">Categoría</label>
                                <select name="category_id" class="form-control">

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alert_type">Nivel de alerta</label>
                                <select name="alert_type" class="form-control">
                                    <option value="M">Menor</option>
                                    <option value="N">Normal</option>
                                    <option value="A">Alta</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="aula">Aula</label>
                                <input type="text" value="aula" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Registrar Incidencias</button>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection