@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')

<body>
    <!-- TEAM DETAILS HOME START -->
    <section class="team-details-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">Team Details</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="index.html" class="text-white">Home</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="team-details.html" class="text-custom">Team Details</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
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
                        <img src="images/team-details-img.png" class="img-fluid d-block mx-auto rounded">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-details rounded p-4">
                        <h4 class="text-dark mb-2">Sheila D. Forsythe</h4>
                        <div class="team-details-border mt-3 mb-3"></div>
                        <p class="team-details-desc text-muted mb-4">Aliquam lorem ante dapibuse in viverra quis feugiat a tellus phasellus viverra the nulla ut metus a varius laoreet quisque rutrum aenean imperdiet etiam ultric nisi vel augu curabitur at ullamcorper ultricies hendrerit id lorem maecenas a nec vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia In ac dui quis lacinia nam pretium.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM DETAILS END -->

    <!-- ACTIVITIES & SKILLS START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-dark">Activities & Skills</h3>
                    <div class="team-details-border mt-3 mb-4"></div>

                    <div class="activities-item mb-4">
                        <p class="mb-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i> Earum rerum hic tenetur a sapiente felis eu pede mollis delectus aut.
                        </p>

                        <p class="mb-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i> Maiores alias consequatur ultricies nisi vel aut repellat.
                        </p>

                        <p class="mb-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i> Sed ut perspiciatis hic sem quam unde omnis iste natus error sit.
                        </p>

                        <p class="mb-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i> Temporibus autem luctus pulvinar quibusdam et aut officiis.
                        </p>

                        <p class="mb-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i> Consequuntur magni sodales a sagittis at sequi nesciunt.
                        </p>

                        <p class="mb-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i> Quis autem vel primis in faucibu eum esse quam.
                        </p>

                        <p class="mb-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-custom mr-2"></i> At vero eos et accusamus ipsum rutrum iusto odio dignissimos.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team-details-border mt-3 mb-4"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ACTIVITIES END -->

    <!-- OTHERS WORKERS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark">Others Workers</h3>
                    <div class="team-details-border mt-3 mb-4"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/team/img-2.jpg" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Petra Hill</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0">Petra Hill</h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/team/img-3.jpg" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">John Skeen</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0">John Skeen</h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/team/img-4.jpg" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dixie Eden</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0">Dixie Eden</h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/team/img-5.jpg" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Craig Ryan</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0">Craig Ryan</h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OTHERS WORKERS END -->
</body>
@endsection
