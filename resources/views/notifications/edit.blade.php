@extends('layouts.app')

@section('template_title')
    {{ __('Editar Notificación')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-defaul w-75 mx-auto">
                    <form method="POST" action="{{ route('notifications.update',$notification->id) }}"  role="form" enctype="multipart/form-data">
                        <div class="card-header">
                            <span class="card-title">{{ __('Editar Notificación')}}</span>
                        </div>
                        <div class="card-body">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('notifications.form')
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="guardar" class="btn btn-primary" disabled>Guardar</button>
                            <a href="{{ route('notifications.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


