@extends('layouts.app')

@section('title', 'Polska suwerenność informacyjna a social media. Media (a)społecznościowe i ich rola w dyskursie publicznym')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <article class="article-content">
                <header class="mb-4">
                    <h1 class="display-4 mb-3">Polska suwerenność informacyjna a social media. Media (a)społecznościowe i ich rola w dyskursie publicznym</h1>

                    <div class="article-meta mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('images/Łuczuk.png') }}" alt="Dr Piotr Łuczuk"
                                 class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h5 class="mb-0">Dr Piotr Łuczuk</h5>
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
                            <p style='text-align: justify;'> Polska suwerenność informacyjna a social media. Media (a)społecznościowe i ich rola w dyskursie publicznym. Jak uniknąć zamknięcia w bańce filtrującej?</p></p>
                        </div>
                    </div>

                    <div class="content-section">
                        <h3>Informacje o autorze</h3>
                        <div class="author-bio p-4 bg-light rounded">
                            <div class="d-flex align-items-start">
                                <img src="{{ asset('images/Łuczuk.png') }}" alt="Dr Piotr Łuczuk"
                                     class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h5>Dr Piotr Łuczuk</h5>
                                    <p class="mb-2">Medioznawca, publicysta, ekspert ds. cyberbezpieczeństwa. Adiunkt w Katedrze Internetu i Komunikacji Cyfrowej Instytutu Edukacji Medialnej i Dziennikarstwa UKSW.</p>
                                    <a href="{{ url('/luczuk') }}" class="btn btn-outline-primary btn-sm">
                                        Zobacz wszystkie artykuły autora
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
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

.article-text p {
    margin-bottom: 1.5rem;
}

.author-bio {
    margin-top: 1rem;
}
</style>
@endsection