@extends('layouts.app')
@section('content')
    <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
                <a href="{{ route('home') }}" class="waves-effect waves-grey btn-flat"><i
                            class="material-icons left">subdirectory_arrow_left</i>Voltar</a>
                <table class="display responsive-table centered" id="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Pontos menor perna</th>
                        <th>Nivel</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('post-script')
    @include('binary.js-index')
@endsection


