@extends('layouts.app')

@section('template_title')
    {{ $itemType->name ?? "{{ __('Mostrar Categoría')" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card  w-75 mx-auto">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar Categoría')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary my-3" href="{{ route('categories.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de la categoría:</strong>
                            {{ $category->category_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
