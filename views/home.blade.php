@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header text-center">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estás logueado correctamente!
                </div>
            </div>
@endsection