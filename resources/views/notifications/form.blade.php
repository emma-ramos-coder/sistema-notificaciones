<div class="box box-info padding-1">
    <div class="box-body">
        <div class="mb-2 row">
            <div class="col form-group">
                {{ Form::label('Título') }}
                {{ Form::text('titulo', $notification->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Título de la notificación']) }}
                {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col form-group">
                {{ Form::label('Estado') }}
                {{ Form::select('estado', ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'], 'Activo',['class' => 'form-control'])}}
            </div>
        </div>
        <div class="mb-2 row">
            <div class="col form-group">
                {{ Form::label('Contenido') }}
                {{ Form::textarea('contenido', $notification->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido de la notificación','rows'=>2]) }}
                {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col form-group">
                {{ Form::label('Destinatarios') }}
                {{ Form::textarea('destinatario', $notification->destinatario, ['id'=>'destinatario','class' => 'form-control' . ($errors->has('destinatario') ? ' is-invalid' : ''), 'placeholder' => 'Destinatario de la notificación','rows'=>2]) }}
                {!! $errors->first('destinatario', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-2 row">
            <div class="col form-group">
                {{ Form::label('Fecha de inicio') }}
                <?php $fecha_actual = date("Y-m-d"); ?>
                {{ Form::date('fecha_inicio', $notification->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'value' => $fecha_actual, 'placeholder' => 'Fecha de inicio']) }}
                {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col form-group">
                {{ Form::label('Fecha de fin') }}
                <?php $fecha_actual = date("Y-m-d"); ?>
                {{ Form::date('fecha_fin', $notification->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'value' => $fecha_actual, 'placeholder' => 'Fecha de fin']) }}
                {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col form-group">
                {{ Form::label('Categoría') }}
                {{ Form::select('category_id', $categories, $notification->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => '--Seleccione Categoría--']) }}
                {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col form-group">
                <label for="receiver_id">Destinatario</label>
                <select class="form-control" name="receiver_id" id="receiver_id">
                    <option value="" selected disabled>--Seleccione un destinatario--</option>
                    @foreach($receivers as $receiver)
                    <option value="{{$receiver->id}}_{{$receiver->email}}_{{$receiver->phone}}">{{$receiver->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" disabled>
            </div>
            <div class="col form-group">
                <label for="phone">Teléfono</label>
                <input type="text" id="phone" name="phone" class="form-control"  disabled>
            </div>
        </div>
        <div class="box-footer mt-4">
            <button type="button" class="btn btn-primary" id="agregar">Registrar destinatario</button>
        </div>
        <div class="form-group mt-4">
            <h4 class="card-title">Destinatarios</h4>
            <div class="table-responsive col-md-12">
                <table id="destinatarios" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Eliminar</th>
                            <th>Destinatario</th>
                            <th align="center">Email</th>
                            <th align="center">Teléfono</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

