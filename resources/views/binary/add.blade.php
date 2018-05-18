@extends('layouts.app')
@section('content')
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <form class="col s12" method="POST" action="{{route('storeSeller')}}">
                        @include('binary.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection