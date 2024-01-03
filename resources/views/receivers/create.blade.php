@extends('layouts.app')

@section('template_title')
    {{ __('Crear Destinatario')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default w-75 mx-auto">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear Destinatario')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('receivers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('receivers.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
