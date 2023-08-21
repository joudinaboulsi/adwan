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
                        <h1 class="page-masthead__title text-white">{{$news[0]->title}}</h1>
                    </div>
                </div>

                <div class="col-auto">
                    <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                        <a data-barba href="/" class="page-masthead-bread__item">Home</a>
                        /
                        <a data-barba href="#" class="page-masthead-bread__item">{{$news[0]->title}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blogSection pr-30 lg:pr-0">
                    <div class="blogCard">
                        <div class="blogCard__image">
                            <div class="ratio ratio-93:53 bg-image js-lazy" data-bg="/img/news/{{$news[0]->img_1}}"></div>
                        </div>

                        <div class="blogCard__content mt-20">
                            <div class="blogCard__category x-gap-20 mb-8">
                                {{date('F, Y', strtotime($news[0]->date))}}
                            </div>

                            <h4 class="blogCard__title text-2xl fw-600">{{$news[0]->title}}</h4>
                            <div class="blogCard__text mt-20">
                                {!! $news[0]->description !!}
                            </div>

                            @if($news[0]->img_2 OR $news[0]->img_3 OR $news[0]->img_4 OR $news[0]->img_5)
                            <div class="row y-gap-32 py-48 md:py-32">
                                @if($news[0]->img_2)
                                <div class="col-md-6">
                                    <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="/img/news/{{$news[0]->img_2}}"></div>
                                </div>
                                @endif
                                @if($news[0]->img_3)
                                <div class="col-md-6">
                                    <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="/img/news/{{$news[0]->img_3}}"></div>
                                </div>
                                @endif
                                @if($news[0]->img_4)
                                <div class="col-md-6">
                                    <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="/img/news/{{$news[0]->img_4}}"></div>
                                </div>
                                @endif
                                @if($news[0]->img_5)
                                <div class="col-md-6">
                                    <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="/img/news/{{$news[0]->img_5}}"></div>
                                </div>
                                @endif
                            </div>
                            @endif
                        </div>

                        <div class="blogSingle-info mt-48">
                            <div class="row justify-content-between y-gap-20">
                                <div class="col-auto">
                                    <div class="socials">
                                        <div class="socials__title">SHARE</div>

                                        <div class="socials__wrap">

                                            <a data-barba href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" class="customer share text-black">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                            <a data-barba href="https://twitter.com/intent/tweet?text={{url()->full()}}" target="_blank" class="customer share text-black">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                            <a data-barba href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->full()}}&title={{$news[0]->title}}&summary={{$news[0]->description}}&source='ACTS'" target="_blank" class="customer share text-black">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                            <a data-barba href="javascript:;" onclick="window.print()" class="customer share text-black">
                                                <i class="fa fa-print" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blogSingle-nav mt-60">
                            <div class="related-nav py-40 px-30">
                                <div class="row justify-content-between align-items-center">
                                    @if(isset($previous[0]))
                                    <div class="col-md-auto col-6">
                                        <a data-barba href="{{ route('news_details_path', $previous[0]->id) }}" class="related-nav__item -prev">
                                            <div class="related-nav__arrow">
                                                <i class="icon icon-left-arrow"></i>
                                            </div>
                                            <div class="related-nav__content">
                                                <span>PREV</span>
                                            </div>
                                        </a>
                                    </div>
                                    @endif

                                    <div class="col-auto md:d-none">
                                        <a data-barba href="{{ route('news_path') }}">
                                            <div class="related-nav__icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>

                                    @if(isset($next[0]))
                                    <div class="col-md-auto col-6">
                                        <a data-barba href="{{ route('news_details_path', $next[0]->id) }}" class="related-nav__item -next">
                                            <div class="related-nav__content">
                                                <span>NEXT</span>
                                            </div>

                                            <div class="related-nav__arrow">
                                                <i class="icon icon-right-arrow"></i>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="blogSidebar">

                    <!-- <div class="blogSidebar__item">
                        <h5 class="blogSidebar__title">Categories</h5>

                        <div class="category mt-20">
                            <div class="category__item">
                                <a data-barba href="#">Architecture</a>
                            </div>
                            <div class="category__item">
                                <a data-barba href="#">Exterior</a>
                            </div>
                            <div class="category__item">
                                <a data-barba href="#">Furniture</a>
                            </div>
                            <div class="category__item">
                                <a data-barba href="#">Interior</a>
                            </div>
                            <div class="category__item">
                                <a data-barba href="#">Structures</a>
                            </div>
                            <div class="category__item">
                                <a data-barba href="#">Urban</a>
                            </div>
                        </div>
                    </div> -->

                    <div class="blogSidebar__item">
                        <h5 class="blogSidebar__title">OTHER POSTS</h5>

                        <div class="recent mt-20">
                            @foreach($otherNews as $o)
                            <a data-barba href="{{ route('news_details_path', $o->id) }}" class="recent__item">
                                <div class="recent__image">
                                    <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="/img/news/{{$o->img_1}}"></div>
                                </div>

                                <div class="recent__content ml-20">
                                    <div class="text-black">{{$o->title}}</div>
                                    <div class="text-accent mt-4">{{date('j F, Y', strtotime($o->date))}}</div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection