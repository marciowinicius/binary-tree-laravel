@extends('layouts.app')
@section('content')
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
                <h3>Vendedor adicionado com sucesso.</h3>
                <a href="{{ route('home') }}" class="waves-effect waves-grey btn-flat"><i
                            class="material-icons left">subdirectory_arrow_left</i>Voltar</a>
            </div>
        </div>
    </div>
@endsection