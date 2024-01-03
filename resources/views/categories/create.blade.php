@extends('layouts.app')

@section('template_title')
    {{ __('Crear Categoria')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default w-75 mx-auto">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear Categoria')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categories.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
