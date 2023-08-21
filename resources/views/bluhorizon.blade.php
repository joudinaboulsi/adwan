@extends("layouts.app")

@section("content")

<section class="page-masthead">
    <div data-parallax="0.6" class="page-masthead__bg">
        <div data-parallax-target class="bg-image js-lazy" data-bg="/img/backgrounds/11.jpg"></div>
    </div>

    <div class="container">
        <div class="page-masthead__content">
            <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                    <div data-anim="slide-up delay-1">
                        <div class="page-masthead__subtitle">OUR WORKS</div>
                        <h1 class="page-masthead__title text-white">Blu Horizon</h1>
                    </div>
                </div>

                <div class="col-auto">
                    <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                        <a data-barba href="/" class="page-masthead-bread__item">Home</a>
                        /
                        <a data-barba href="#" class="page-masthead-bread__item">Blu Horizon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="page-masthead__content js-pin-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="gallery row x-gap-10 y-gap-10 pr-80 lg:pr-0">
                        <div class="col-6">
                            <a href="/img/portfolio/bluhorizon/1.jpg" class="gallery__item js-gallery" data-gallery="gallery1">
                                <div class="ratio ratio-1:1">
                                    <img class="ratio-img" src="/img/portfolio/bluhorizon/1.jpg" alt="project image" />
                                </div>

                                <div class="gallery__button">
                                    <i class="icon" data-feather="plus"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/img/portfolio/bluhorizon/2.jpg" class="gallery__item js-gallery" data-gallery="gallery1">
                                <div class="ratio ratio-1:1">
                                    <img class="ratio-img" src="/img/portfolio/bluhorizon/2.jpg" alt="project image" />
                                </div>

                                <div class="gallery__button">
                                    <i class="icon" data-feather="plus"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/img/portfolio/bluhorizon/3.jpg" class="gallery__item js-gallery" data-gallery="gallery1">
                                <div class="ratio ratio-1:1">
                                    <img class="ratio-img" src="/img/portfolio/bluhorizon/3.jpg" alt="project image" />
                                </div>

                                <div class="gallery__button">
                                    <i class="icon" data-feather="plus"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/img/portfolio/bluhorizon/4.jpg" class="gallery__item js-gallery" data-gallery="gallery1">
                                <div class="ratio ratio-1:1">
                                    <img class="ratio-img" src="/img/portfolio/bluhorizon/4.jpg" alt="project image" />
                                </div>

                                <div class="gallery__button">
                                    <i class="icon" data-feather="plus"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/img/portfolio/bluhorizon/5.jpg" class="gallery__item js-gallery" data-gallery="gallery1">
                                <div class="ratio ratio-1:1">
                                    <img class="ratio-img" src="/img/portfolio/bluhorizon/5.jpg" alt="project image" />
                                </div>

                                <div class="gallery__button">
                                    <i class="icon" data-feather="plus"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/img/portfolio/bluhorizon/6.jpg" class="gallery__item js-gallery" data-gallery="gallery1">
                                <div class="ratio ratio-1:1">
                                    <img class="ratio-img" src="/img/portfolio/bluhorizon/6.jpg" alt="project image" />
                                </div>

                                <div class="gallery__button">
                                    <i class="icon" data-feather="plus"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/img/portfolio/bluhorizon/396-2.jpg" class="gallery__item js-gallery" data-gallery="gallery1">
                                <div class="ratio ratio-1:1">
                                    <img class="ratio-img" src="/img/portfolio/bluhorizon/396-2.jpg" alt="project image" />
                                </div>

                                <div class="gallery__button">
                                    <i class="icon" data-feather="plus"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-10">
                    <div class="text-left js-pin-content">
                        <h3 class="text-4xl leading-2xl md:mt-48">At a glance</h3>
                        <p class="mt-12">Blue Horizon is perfectly located in the only area of Protaras that stays open all year long. At a walking distance of some of the town’s best restaurants and trendiest hot spots, our apartments overlook the Mediterranean Sea, creating the perfect setting for a vibrant community.</p>

                        <div class="row y-gap-32 pt-32">
                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="text-sm leading-md uppercase text-black fw-600">LOCATION</div>
                                <div class="text-sm details-text fw-600"><span class="text-lg"></span> Protaras, Cyprus</div>
                            </div>

                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="text-sm leading-md uppercase text-black fw-600">TYPE</div>
                                <div class="text-sm details-text fw-600"><span class="text-lg"></span> Apartments</div>
                            </div>

                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="text-sm leading-md uppercase text-black fw-600">NUMBER OF UNITS</div>
                                <div class="text-sm details-text fw-600"><span class="text-lg"></span> 40</div>
                            </div>

                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="text-sm leading-md uppercase text-black fw-600">SPECIFICATIONS</div>
                                <div class="text-sm details-text fw-600"><span class="text-lg"></span>
                                    - Private Swimming Pool <br>
                                    - Private Gym <br>
                                    - Vast Green Areas <br>
                                    - Sea Views
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="text-sm leading-md uppercase text-black fw-600">STATUS</div>
                                <div class="text-sm details-text fw-600"><span class="text-lg"></span>Under Construction</div>
                            </div>

                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="text-sm leading-md uppercase text-black fw-600">DELIVERY DATE</div>
                                <div class="text-sm details-text fw-600"><span class="text-lg"></span> April 2024</div>
                            </div>

                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="text-sm leading-md uppercase text-black fw-600">INVESTMENT GROUP</div>
                                <div class="text-sm details-text fw-600"><span class="text-lg"></span> LA1 Investors Group LTD.</div>
                            </div>
                        </div>

                        <div class="row y-gap-20 pt-20">
                            <div class="col-12">
                                <a data-barba href="https://storage.net-fs.com/hosting/4574030/109/" target="_blank" class="button -md -dark text-white mb-2">Take a Tour</a>
                                <a data-barba href="" data-toggle="modal" data-target="#brochureModal" class="button -md -dark text-white mb-2">Download Brochure</a>
                                <!-- <a data-barba href="" data-toggle="modal" data-target="#inquireModal" class="button -md -dark text-white">Inquire</a> -->
                            </div>
                        </div>

                        <div class="row y-gap-32 pt-32">
                            <div class="col-md-6">
                                <div class="text-xs leading-2xl uppercase text-black fw-600">SHARE</div>

                                <div class="socialsIcons mt-12">
                                    <a data-barba href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" class="customer share text-dark">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="https://twitter.com/intent/tweet?url={{url()->full()}}" target="_blank" class="customer share text-dark">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="http://www.linkedin.com/shareArticle?mini=true&url={{url()->full()}}&title=" target="_blank" class="customer share text-dark">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="whatsapp://send?text=Check%20this%20{{url()->full()}}" target="_blank" class="customer share text-dark">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="javascript:;" onclick="window.print()" class="customer share text-dark">
                                        <i class="fa fa-print" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="related-nav py-40">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto col-6">
                <a data-barba href="{{ route('illido_path') }}" class="related-nav__item -prev">
                    <div class="related-nav__arrow">
                        <i class="icon icon-left-arrow"></i>
                    </div>
                    <div class="related-nav__content">
                        <span>PREV</span>
                        <p>Il Lido</p>
                    </div>
                </a>
            </div>

            <div class="col-auto md:d-none">
                <div class="related-nav__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="col-md-auto col-6">
                <a data-barba href="{{ route('downtown_path') }}" class="related-nav__item -next">
                    <div class="related-nav__content">
                        <span>NEXT</span>
                        <p>Down Town Views</p>
                    </div>

                    <div class="related-nav__arrow">
                        <i class="icon icon-right-arrow"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md bg-beige-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="sectionHeading -top-line text-center">
                    <span class="sectionHeading__subtitle">WORKS</span>
                    <h2 class="sectionHeading__title">Other Projects</h2>
                </div>
            </div>
        </div>

        <div class="row layout-pt-sm">
            <div class="sectionSlider overflow-hidden sm:px-16 js-sectionSlider" data-gap="30" data-slider-col="base-3 lg-3 md-3 sm-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a data-barba href="{{ route('azure_path') }}" class="portfolioCard -type-1 ratio">
                            <div class="portfolioCard__image ratio ratio-3:4">
                                <img class="ratio-img js-lazy" src="#" data-src="/img/portfolio/fancy/azure.jpg" alt="Azure" />
                            </div>

                            <div class="portfolioCard__content px-30 py-30">
                                <span class="portfolioCard__category text-sm uppercase text-beige-dark">VILLAS</span>
                                <h3 class="portfolioCard__title text-lg fw-600 mt-8">Azure</h3>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a data-barba href="{{ route('illido_path') }}" class="portfolioCard -type-1 ratio">
                            <div class="portfolioCard__image ratio ratio-3:4">
                                <img class="ratio-img js-lazy" src="#" data-src="/img/portfolio/fancy/illido.jpg" alt="Il Lido" />
                            </div>

                            <div class="portfolioCard__content px-30 py-30">
                                <span class="portfolioCard__category text-sm uppercase text-beige-dark">VILLAS</span>
                                <h3 class="portfolioCard__title text-lg fw-600 mt-8">Il Lido</h3>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a data-barba href="{{ route('downtown_path') }}" class="portfolioCard -type-1 ratio">
                            <div class="portfolioCard__image ratio ratio-3:4">
                                <img class="ratio-img js-lazy" src="#" data-src="/img/portfolio/fancy/downtown.jpg" alt="Down Town Views" />
                            </div>

                            <div class="portfolioCard__content px-30 py-30">
                                <span class="portfolioCard__category text-sm uppercase text-beige-dark">APARTMENTS</span>
                                <h3 class="portfolioCard__title text-lg fw-600 mt-8">Down Town Views</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="brochureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="brochureModalLabel">Download Brochure</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please fill in the below form to receive the brochure by mail.</p>
                <form class="row" action="{{route('bluhorizon_path')}}" id="projectform" method="POST">
                    @csrf
                    <div class="col-12 mt-20">
                        <div class="js-input-group">
                            <input type="text" name="name" required placeholder="Your Name" />
                            <span class="form__error"></span>
                        </div>
                    </div>
                    <div class="col-12 mt-20">
                        <div class="js-input-group">
                            <input type="email" name="email" required placeholder="Your Email" />
                            <span class="form__error"></span>
                        </div>
                    </div>
                    <div class="col-12 mt-32">
                        <button type="submit" name="submit" class="button -md -accent text-white">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="inquireModal" tabindex="-1" role="dialog" aria-labelledby="inquireModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inquireModalLabel">Inquire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please fill in the below and we will get back to you shortly.</p>
                <form class="row" action="{{route('bluhorizon_inquire_path')}}" id="inquireform" method="POST">
                    @csrf
                    <div class="col-12 mt-20">
                        <div class="js-input-group">
                            <input type="text" name="name" required placeholder="Your Name" />
                            <span class="form__error"></span>
                        </div>
                    </div>
                    <div class="col-12 mt-20">
                        <div class="js-input-group">
                            <input type="email" name="email" required placeholder="Your Email" />
                            <span class="form__error"></span>
                        </div>
                    </div>
                    <div class="col-12 mt-20">
                        <div class="js-input-group">
                            <input type="text" name="phone" required placeholder="Your Phone Number" />
                            <span class="form__error"></span>
                        </div>
                    </div>
                    <div class="col-12 mt-32">
                        <button type="submit" name="submit" class="button -md -accent text-white">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection