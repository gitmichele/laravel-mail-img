@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ route('create') }}">
                Aggiungi un nuovo film
            </a>

            <hr>

            <h3>Film aggiunti di recente:</h3>

            @include('components.movie-list')
        </div>
    </div>
</div>
@endsection
