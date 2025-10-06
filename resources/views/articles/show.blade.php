@extends('layouts.app')

@section('title', $author->name . ' - ' . $article->title)
@section('description', 'Artykuł autorstwa ' . $author->name . ' pt. "' . $article->title . '" - analiza opublikowana w Centrum Analiz Strategicznych i Niejawnych (CASN)')
@section('keywords', 'CASN, ' . strtolower($author->name) . ', ' . strtolower(str_replace(' ', ', ', $article->title)) . ', analizy strategiczne')

@section('content')
<!-- ARTICLE HERO SECTION START -->
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
<!-- ARTICLE HERO SECTION END -->

<div class="container my-5" style="padding-top: 60px;">

    <div class="row">
        <div class="col-lg-8">
            <article class="article-content">
                <header class="mb-4">
                    <h1 class="display-4 mb-3">{{ $article->title }}</h1>

                    <div class="article-meta mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset($author->photo) }}" alt="{{ $author->name }}"
                                 class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h5 class="mb-0">{{ $author->name }}</h5>
                                <small class="text-muted">Autor artykułu</small>
                            </div>
                        </div>

                        <div class="article-info">
                            <span class="badge bg-primary me-2">Analiza</span>
                            <span class="badge bg-secondary">CASN</span>
                        </div>
                    </div>
                </header>

                <div class="article-body">


                    <div class="content-section mb-5">
                        <h2>Treść analizy</h2>
                        <div class="article-text">
                            {!! $article->content !!}
                        </div>
                    </div>

                    <div class="content-section">
                        <h3>Informacje o autorze</h3>
                        <div class="author-bio p-4 bg-light rounded">
                            <div class="d-flex align-items-start">
                                <img src="{{ asset($author->photo) }}" alt="{{ $author->name }}"
                                     class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h5>{{ $author->name }}</h5>
                                    <p class="mb-2">{{ Str::limit(strip_tags($author->bio), 200) }}...</p>
                                    <a href="{{ url('/' . $author->slug) }}" class="btn btn-outline-primary btn-sm">
                                        Zobacz wszystkie artykuły autora
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <div class="col-lg-4">
            <aside class="sidebar">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Inne artykuły autora</h5>
                    </div>
                    <div class="card-body">
                        @if(count($author->articles) > 1)
                            <ul class="list-unstyled">
                                @foreach($author->articles as $otherArticle)
                                    @if($otherArticle->slug !== $article->slug)
                                        <li class="mb-3">
                                            <a href="{{ url($otherArticle->link ?? '#') }}" class="text-decoration-none">
                                                <h6 class="mb-1">{{ Str::limit($otherArticle->title, 50) }}</h6>
                                                <small class="text-muted">Artykuł</small>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted mb-0">To jedyny artykuł tego autora.</p>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pozostali autorzy</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-0">Zobacz analizy innych ekspertów CASN.</p>
                        <a href="{{ url('/autorzy') }}" class="btn btn-primary btn-sm mt-2">
                            Wszyscy autorzy
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<style>
.article-content {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.article-meta {
    border-bottom: 1px solid #dee2e6;
    padding-bottom: 1.5rem;
}

.article-info .badge {
    font-size: 0.8rem;
}

.content-section h2 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 0.5rem;
    margin-bottom: 1.5rem;
}

.content-section h3 {
    color: #34495e;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.article-text {
    line-height: 1.8;
    font-size: 1.1rem;
    color: #2c3e50;
}

.author-bio {
    margin-top: 1rem;
}

.sidebar .card {
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.sidebar .card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.breadcrumb {
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 0.375rem;
}
</style>
@endsection
