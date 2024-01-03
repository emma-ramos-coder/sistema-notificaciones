@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row m-2">

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info text-center p-3 shadow-sm border rounded-lg">
                                <div class="inner">
                                    <h3><?php echo $total_categorias; ?></h3>

                                    <h5>Categorias</h5>
                                </div>
                                <div class="icon mb-3">
                                    <i class="fa fa-archive fa-2x"></i>
                                </div>
                                <a href="  {{route('categories.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success text-center p-3">
                                <div class="inner">
                                    <h3><?php echo $total_destinatarios; ?></h3>

                                    <h5>Destinatarios</h5>
                                </div>
                                <div class="icon mb-3">
                                    <i class="fa fa-user fa-2x"></i>
                                </div>
                                <a href=" {{ route('receivers.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning text-center p-3 shadow-sm border rounded-lg">
                                <div class="inner">
                                    <h3><?php echo $total_usuarios; ?></h3>

                                    <h5>Usuarios</h5>
                                </div>
                                <div class="icon mb-3">
                                    <i class="fas fa-user-tie fa-2x"></i>
                                </div>
                                <a href="#" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger text-center p-3 shadow-sm border rounded-lg">
                                <div class="inner">
                                    <h3><?php echo $total_notificaciones; ?></h3>

                                    <h5>Notificaciones</h5>
                                </div>
                                <div class="icon mb-3">
                                    <i class="fa fa-paste fa-2x"></i>
                                </div>
                                <a href=" {{route('notifications.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- ./col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
