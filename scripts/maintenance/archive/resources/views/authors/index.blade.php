@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Autorzy</h1>

    <div class="row">
        @foreach($authors as $author)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $author->photo }}" class="card-img-top" alt="{{ $author->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $author->name }}</h5>
                    <p class="card-text">{{ Str::limit($author->bio, 150) }}</p>
                    <a href="{{ url('/' . $author->slug) }}" class="btn btn-primary">Zobacz profil</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
