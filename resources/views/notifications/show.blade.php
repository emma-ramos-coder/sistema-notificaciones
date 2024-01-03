@extends('layouts.app')

@section('template_title')
    {{ __('Mostrar Notificación') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-75 mx-auto">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar Notificación')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary my-3" href="{{ route('notifications.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-3 form-group">
                                <strong>Emisor:</strong>
                                {{ $notification->user->name }}
                                <br>
                                <strong>Cargo:</strong>
                                {{ $notification->user->job }}

                            </div>

                            <div class="col form-group text-center">
                                <strong>Fecha de inicio:</strong>
                                {{ $notification->fecha_inicio }}<br>
                                <strong>Fecha de fin:</strong>
                                {{ $notification->fecha_fin }}<br>
                            </div>
                            <div class="col form-group text-center">
                                <strong>Nro:</strong>
                                {{ $notification->id }}
                                <br>
                                <strong>Categoria:</strong>
                                {{ $notification->category->category_name }}
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-12 form-group">
                                <strong>Titulo:</strong>
                                {{ $notification->titulo }}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 form-group">
                                <strong>Contenido:</strong>
                                {{ $notification->contenido }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="table-responsive col-md-12 table-bordered shadow mt-4 mx-auto p-3">
                            <table id="notificationDetails" class="table table-striped">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Destinatarios</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notificationDetails as $notificationDetail)
                                    <tr>
                                        <td>{{$notificationDetail->receiver->name}}</td>
                                        <td class="text-center">{{$notificationDetail->email}}</td>
                                        <td class="text-center">{{$notificationDetail->phone}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
