@extends('layouts.app')

@section('content')
    <div class="container fluid">
        <form class="mx-5" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">

            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
            </div>

            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating">
            </div>

            <div class="form-check">
                <br>
                @foreach ($actors as $actor)
                    <input class="form-check-input" type="checkbox" value="{{ $actor -> id }}" id="actors_id[]" name="actors_id[]">
                    <label class="form-check-label" for="actors_id[]">
                    {{ $actor -> firstname }} {{ $actor -> lastname }} 
                    </label>
                    <br>
                @endforeach
            </div>
            <br>
            <div class="form-group">
                <label for="poster">Add image</label>
                <input type="file" class="form-control-file" id="poster" name="poster">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection