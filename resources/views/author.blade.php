@extends('layouts.app')

@section('title', $name . ' - CASN')

@section('content')
    <!-- TEAM DETAILS HOME START -->
    <section class="team-details-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM DETAILS HOME END -->

    <!-- TEAM DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="team-details-img mo-mb-20">
                        <img src="{{ asset(ltrim($photo, '/')) }}" alt="Zdjęcie {{ $name }}" class="img-fluid d-block mx-auto rounded">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-details rounded p-4">
                        <h4 class="text-dark mb-2">{{ $name }}</h4>
                        <div class="team-details-border mt-3 mb-3"></div>
                        <p class="team-details-desc text-muted mb-4">{{ $bio }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM DETAILS END -->

    @if (!empty($articles))
        <!-- ACTIVITIES & SKILLS START -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-dark">Artykuły</h3>
                        <div class="team-details-border mt-3 mb-4"></div>

                        <div class="activities-item mb-4">
                            @foreach ($articles as $article)
                                <p class="mb-3">
                                    <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i>
                                    <a href="{{ url($article['path']) }}">{{ $article['title'] }}</a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ACTIVITIES END -->
    @endif
@endsection
