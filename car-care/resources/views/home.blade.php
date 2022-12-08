@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Un nuevo dia para trabajar') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas dentro!') }}
                    
                    
                </div><a class="btn btn-primary" href="/autos">Ir a listado de autos y registros</a>
            </div>
        </div>
    </div>
</div>
@endsection
