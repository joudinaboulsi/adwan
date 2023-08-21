@extends("layouts.app")

@section("content")

<section class="page-masthead">
    <div data-parallax="0.6" class="page-masthead__bg">
        <div data-parallax-target class="bg-image js-lazy" data-bg="img/backgrounds/12.jpg"></div>
    </div>

    <div class="container">
        <div class="page-masthead__content">
            <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                    <div data-anim="slide-up delay-1">
                        <div class="page-masthead__subtitle">News</div>
                        <h1 class="page-masthead__title text-white">Discover our Latest News</h1>
                    </div>
                </div>

                <div class="col-auto">
                    <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                        <a data-barba href="/" class="page-masthead-bread__item">Home</a>
                        /
                        <a data-barba href="#" class="page-masthead-bread__item">Discover our Latest News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="section-filter px-16">
            <!-- <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="filter-button-group text-dark fw-500 mt-32">
                        <button class="button mr-20 btn-active" data-filter="*">All</button>
                        <button class="button mr-20" data-filter=".modeling">Modeling</button>
                        <button class="button mr-20" data-filter=".architecture">Architecture</button>
                        <button class="button mr-20" data-filter=".buildings">Buildings</button>
                        <button class="button mr-20" data-filter=".living_room">Living Room</button>
                    </div>
                </div>
            </div> -->

            <div class="masonry -gap-32 -col-3 layout-pt-sm js-masonry js-masonry-no-filter">
                <div class="masonry__sizer"></div>

                @foreach($news as $n)
                <div class="masonry__item -no-ratio {{$n->type}}">
                    @include('layouts.news-box')
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>

@endsection