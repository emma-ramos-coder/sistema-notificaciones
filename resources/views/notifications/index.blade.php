@extends('layouts.app')

@section('template_title')
{{__('Notificación')}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Notificación') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('api_notificaciones') }}" class="btn btn-dark text-white btn-sm float-right mx-1"  data-placement="left">
                                    {{ __('JSON') }}
                                </a>
                                <a href="{{ route('notifications.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Notificación') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="order-listing" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Titulo</th>
										<th>Contenido</th>
										<th>Destinatario</th>
										<th>Fecha de inicio</th>
										<th>Emisor</th>
                                        <th width="300px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notifications as $notification)
                                        <tr>
                                            <td>{{ $notification->id }}</td>
                                            <td>{{ $notification->titulo }}</td>
                                            <td>{{ $notification->contenido }}</td>
                                            <td>{{ $notification->destinatario }}</td>
											<td>{{ $notification->fecha_inicio }}</td>
											<td>{{ $notification->user->name }}</td>

                                            <td width="300px">
                                                <form action="{{ route('notifications.destroy',$notification->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('notifications.show',$notification->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>

                                                    <a class="btn btn-sm btn-success" href="{{ route('notifications.edit',$notification->id) }}" ><i class="fa fa-edit"></i>  {{ __('Editar')}}</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $notifications->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
