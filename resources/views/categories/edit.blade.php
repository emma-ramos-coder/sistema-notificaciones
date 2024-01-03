@extends('layouts.app')

@section('template_title')
    {{ __('Editar Categoría')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  w-75 mx-auto">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar Categoría')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categories.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
