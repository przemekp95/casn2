@extends('layouts.app')

@section('content')
<!-- HOME SECTION WITH BG-OVERLAY START -->
<section class="bg-home section img-fluid " id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME SECTION WITH BG-OVERLAY END -->

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $author->photo }}" class="img-fluid rounded" alt="{{ $author->name }}">
        </div>
        <div class="col-md-8">
            <h1>{{ $author->name }}</h1>
            <div class="bio">
                {!! nl2br(e($author->bio)) !!}
            </div>

            @if(count($author->articles) > 0)
            <h3 class="mt-4">Artykuły autora:</h3>
            <ul class="list-group">
                @foreach($author->articles as $article)
                <li class="list-group-item">
                    <a href="{{ $article->link ?? '#' }}">{{ $article->title }}</a>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
@endsection
