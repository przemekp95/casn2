@extends('layouts.app')

@section('title', 'Autorzy - CASN')

@section('content')
    <!-- OUR TEAM HOME START -->
    <section class="our-team-home section" id="home">
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
    <!-- OUR TEAM HOME END -->

    <!-- OUR TEAM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                @foreach ($authors as $author)
                    <div class="col-lg-3 col-md-6">
                        <div class="our-team-box mt-2 mb-4">
                            <div class="team-img">
                                <img src="{{ asset(ltrim($author['photo'], '/')) }}" alt="{{ $author['name'] }}" class="img-fluid d-block rounded">
                                <div class="our-team-name text-center">
                                    <h6 class="mb-0 text-white">{{ $author['name'] }}</h6>
                                </div>
                            </div>
                            <div class="our-team-overlay">
                                <div class="item-content text-white text-center p-2">
                                    <div class="item-desc">
                                        <h5 class="text-white mb-0">
                                            <a href="{{ url('/' . $author['slug']) }}" style="color: inherit; text-decoration: none;">
                                                {{ $author['name'] }}
                                            </a>
                                        </h5>
                                        <div class="our-team-box-border mt-3 mb-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- OUR TEAM END -->
@endsection
