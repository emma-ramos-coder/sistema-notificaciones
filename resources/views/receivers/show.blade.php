@extends('layouts.app')

@section('template_title')
    {{ __('Mostrar Destinatario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card  w-75 mx-auto">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar Destinatario')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary my-3" href="{{ route('receivers.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre del destinatario: </strong>
                            {{ $receiver->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email: </strong>
                            {{ $receiver->email }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono: </strong>
                            {{ $receiver->phone }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
