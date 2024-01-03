<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre de categoría') }}
            {{ Form::text('category_name', $category->category_name, ['class' => 'form-control' . ($errors->has('category_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la categoría']) }}
            {!! $errors->first('category_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a class="btn btn-danger my-3" href="{{ route('categories.index') }}"> {{ __('Volver') }}</a>
    </div>
</div>
