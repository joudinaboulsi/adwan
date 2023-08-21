@extends("layouts.app")

@section("content")

<!-- masthead -->
<section class="masthead swiper-container js-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div data-parallax="0.6" class="masthead__image" data-swiper-parallax="40%">
                <img data-parallax-target class="swiper-lazy" src="/img/main-sliders/home-1/7.jpg" alt="Down Town Views" />
            </div>

            <div class="container-fluid h-100 px-32">
                <div class="row align-items-center">
                    <div class="col-lg-10 offset-lg-2 offset-md-1">
                        <div class="masthead__content js-content">
                            <div data-split="lines" data-anim="split-lines" class="js-title-wrap">
                                <h1 class="masthead__title text-white js-title">
                                    Developing Premium <br />
                                    <span>Residential Real Estate</span>
                                </h1>
                            </div>
                            <div class="masthead__button js-button">
                                <a data-barba href="{{ route('iliados_path') }}" class="button -simple text-white">
                                    VIEW PROJECT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div data-parallax="0.6" class="masthead__image" data-swiper-parallax="40%">
                <img data-parallax-target class="swiper-lazy" src="/img/main-sliders/home-1/6.jpg" alt="Blu Horizon" />
            </div>

            <div class="container-fluid h-100 px-32">
                <div class="row align-items-center">
                    <div class="col-lg-10 offset-lg-2 offset-md-1">
                        <div class="masthead__content js-content">
                            <div data-split="lines" class="js-title-wrap">
                                <h1 class="masthead__title text-white js-title">
                                    Developing Premium<br />
                                    <span>Residential Real Estate</span>
                                </h1>
                            </div>
                            <div class="masthead__button js-button">
                                <a data-barba href="{{ route('downtown_path') }}" class="button -simple text-white">
                                    VIEW PROJECT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div data-parallax="0.6" class="masthead__image" data-swiper-parallax="40%">
                <img data-parallax-target class="swiper-lazy" src="/img/main-sliders/home-1/4.jpg" alt="Azure" />
            </div>

            <div class="container-fluid h-100 px-32">
                <div class="row align-items-center">
                    <div class="col-lg-10 offset-lg-2 offset-md-1">
                        <div class="masthead__content js-content">
                            <div data-split="lines" data-anim="split-lines" class="js-title-wrap">
                                <h1 class="masthead__title text-white js-title">
                                    Developing Premium <br />
                                    <span>Residential Real Estate</span>
                                </h1>
                            </div>
                            <div class="masthead__button js-button">
                                <a data-barba href="{{ route('azure_path') }}" class="button -simple text-white">
                                    VIEW PROJECT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="masthead__pagination_numbers js-pag-numbers lg:d-none">
        <span class="js-current"></span>
        <span>/</span>
        <span class="js-all"></span>
    </div>

    <div class="masthead-pagination js-pag">
        <div data-cursor class="masthead-pagination__item is-active js-pag-item">
            <span class="masthead-pagination__number">01</span>
            <h4 class="masthead-pagination__title md:d-none">
                Iliados 3, <br> Pangrati, Athens
            </h4>
            <span class="masthead-pagination__line"></span>
        </div>

        <div data-cursor class="masthead-pagination__item js-pag-item">
            <span class="masthead-pagination__number">02</span>
            <h4 class="masthead-pagination__title md:d-none">
                Down Town Views, <br> Nicosia, Cyprus 
            </h4>
            <span class="masthead-pagination__line"></span>
        </div>

        <div data-cursor class="masthead-pagination__item js-pag-item">
            <span class="masthead-pagination__number">03</span>
            <h4 class="masthead-pagination__title md:d-none">
                Azure by Kybana Group, <br> Protaras, Cyprus
            </h4>
            <span class="masthead-pagination__line"></span>
        </div>
    </div>

    <div class="masthead__scroll js-scroll md:d-none">
        <div class="masthead__scroll_item">
            Scroll
            <div class="masthead__scroll_icon">
                <i class="icon icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>

<!-- <div class="bg-beige-dark p-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col text-center">
                <p>Projects in Athens coming soon!</p>
            </div>
        </div>
    </div>
</div> -->

<!-- about -->
<section class="layout-pt-lg overflow-visible z-2">
    <div class="container">
        <div data-anim-wrap class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="aboutBack sm:d-none">
                    <img src="/img/general/large-logo-bg.svg" alt="logo" />
                </div>

                <div data-anim-child="slide-right delay-8" class="sectionHeading -left-line -about pr-12 lg:pr-0">
                    <span class="sectionHeading__subtitle">OUR STORY</span>
                    <h2 class="sectionHeading__title">We develop Premium Residential Real Estate.</h2>
                    <p class="sectionHeading__text">
                        Our basic philosophy is to offer very high-quality finishings and materials, in prime locations, at competitive prices; while collaborating with only the best architects to provide the most beautiful properties. 
                    </p>

                    <div class="sectionHeading__button">
                        <a data-barba href="{{ route('about_path') }}" class="button -md -dark text-white">DISCOVER MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-6">
                <div class="overlayImgs md:mt-60">
                    <div data-anim-child="img-right cover-black" class="overlayImgs__back">
                        <img src="/img/backgrounds/7.jpg" alt="Image" />
                    </div>

                    <div data-anim-child="img-right cover-black delay-3" class="overlayImgs__front -border">
                        <img src="/img/backgrounds/2.jpg" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- counter -->
<section class="layout-pt-md layout-pb-md bg-grey pattern_bg_1">
    <div class="container">
        <div class="row justify-content-between md:pt-48">
            <div class="col-lg-auto col-md-4">
                <div class="counter">
                    <div class="counter__back">
                        22
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-grey">22</div>
                        <h5 class="counter__title text-grey">
                            villas<br />
                            delivered
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-auto col-md-4">
                <div class="counter">
                    <div class="counter__back">
                        71
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-grey">71</div>
                        <h5 class="counter__title text-grey">
                            apartments<br />
                            ongoing
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-auto col-md-4">
                <div class="counter">
                    <div class="counter__back">
                        30
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-grey">30</div>
                        <h5 class="counter__title text-grey">
                            million euros<br />
                            worth of projects
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- services -->
<section class="layout-pt-lg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sectionHeading -top-line text-center">
                    <span class="sectionHeading__subtitle">WHAT CAN WE OFFER</span>
                    <h2 class="sectionHeading__title">Our Services</h2>
                </div>
            </div>
        </div>

        <div class="row y-gap-32 layout-pt-sm">
            <div class="col-lg-3 col-md-6">
                <div data-anim="slide-up" class="service -card -hover">
                    <div class="service__content -border">
                        <div class="service__icon">
                            <i class="icon icon-cube text-beige"></i>
                        </div>

                        <h3 class="service__title mt-20">Residential Real Estate Project Development</h3>
                        <p class="service__text mb-20">With a modern state-of-the-art architecture, we always challenge ourselves to offer the best quality/price product in the market.</p>
                        <a href="" data-toggle="modal" data-target="#service-1" class="button -md -dark text-white">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div data-anim="slide-up" class="service -card -hover">
                    <div class="service__content -border">
                        <div class="service__icon">
                            <i class="icon icon-send text-beige"></i>
                        </div>

                        <h3 class="service__title mt-20">Golden Visa Assistance</h3>
                        <p class="service__text mb-20">We can take care of your golden visa for yourself, your spouse, your children and your parents, without the need of your physical presence in Cyprus or in Greece.</p>
                        <a href="" data-toggle="modal" data-target="#service-2" class="button -md -dark text-white">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div data-anim="slide-up" class="service -card -hover">
                    <div class="service__content -border">
                        <div class="service__icon">
                            <i class="icon icon-pencil text-beige"></i>
                        </div>

                        <h3 class="service__title mt-20">Interior Design and Furniture</h3>
                        <p class="service__text mb-20">We can furnish and accessorize your home up to the last fork. We hand you the key and your home is ready for you to move in or to rent!</p>
                        <a href="" data-toggle="modal" data-target="#service-3" class="button -md -dark text-white">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div data-anim="slide-up" class="service -card -hover">
                    <div class="service__content -border">
                        <div class="service__icon">
                            <i class="icon icon-idea text-beige"></i>
                        </div>

                        <h3 class="service__title mt-20">Rentals and Property Management</h3>
                        <p class="service__text mb-20">We insure you get the highest yield possible on your home, while keeping it in second to none shape. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <a href="" data-toggle="modal" data-target="#service-4" class="button -md -dark text-white">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- portfolio -->
<section class="layout-pt-lg layout-pb-lg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div class="sectionHeading -left-line">
                    <span class="sectionHeading__subtitle">PROJECTS</span>
                    <h2 class="sectionHeading__title">Featured Works</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center layout-pt-sm">
            <div class="col-lg-8">
                <div class="sectionSlider js-sectionSlider" data-gap="30" data-slider-col="base-1 lg-1 md-1 sm-1" data-center data-loop data-pagination data-cursor data-cursor-label="DRAG">
                    <div class="sliderNav -portfolio-slider js-nav">
                        <button class="sliderNav__item -prev js-prev">PREV</button>
                        <button class="sliderNav__item -next js-next">NEXT</button>
                    </div>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a data-barba data-cursor data-cursor-label="DRAG" href="{{ route('iliados_path') }}" class="portfolio">
                                <div class="portfolio__image">
                                    <div class="ratio ratio-16:9">
                                        <img class="ratio-img swiper-lazy" src="#" data-src="/img/portfolio/wide/5.jpg" alt="Down Town Views" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>

                                <div class="portfolio__content text-center">
                                    <span class="portfolio__category">APARTMENTS</span>
                                    <h3 class="portfolio__title">Iliados 3</h3>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a data-barba data-cursor data-cursor-label="DRAG" href="{{ route('downtown_path') }}" class="portfolio">
                                <div class="portfolio__image">
                                    <div class="ratio ratio-16:9">
                                        <img class="ratio-img swiper-lazy" src="#" data-src="/img/portfolio/wide/4.jpg" alt="Down Town Views" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>

                                <div class="portfolio__content text-center">
                                    <span class="portfolio__category">APARTMENTS</span>
                                    <h3 class="portfolio__title">Down Town Views</h3>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a data-barba data-cursor data-cursor-label="DRAG" href="{{ route('bluhorizon_path') }}" class="portfolio">
                                <div class="portfolio__image">
                                    <div class="ratio ratio-16:9">
                                        <img class="ratio-img swiper-lazy" src="#" data-src="/img/portfolio/wide/3.jpg" alt="project image" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>

                                <div class="portfolio__content text-center">
                                    <span class="portfolio__category">BUILDINGS</span>
                                    <h3 class="portfolio__title">Blu Horizon</h3>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a data-barba data-cursor data-cursor-label="DRAG" href="{{ route('illido_path') }}" class="portfolio">
                                <div class="portfolio__image">
                                    <div class="ratio ratio-16:9">
                                        <img class="ratio-img swiper-lazy" src="#" data-src="/img/portfolio/wide/2.jpg" alt="project image" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>

                                <div class="portfolio__content text-center">
                                    <span class="portfolio__category">VILLAS</span>
                                    <h3 class="portfolio__title">Il Lido</h3>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a data-barba data-cursor data-cursor-label="DRAG" href="{{ route('azure_path') }}" class="portfolio">
                                <div class="portfolio__image">
                                    <div class="ratio ratio-16:9">
                                        <img class="ratio-img swiper-lazy" src="#" data-src="/img/portfolio/wide/1.jpg" alt="project image" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>

                                <div class="portfolio__content text-center">
                                    <span class="portfolio__category">VILLAS</span>
                                    <h3 class="portfolio__title">Azure</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="pagination -slider mt-48 js-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- cta -->
<section class="layout-pt-md layout-pb-md bg-beige-dark">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-8 col-lg-9 col-md-11">
                <div class="cta">
                    <h2 class="cta__title text-white">
                        Get in touch
                    </h2>

                    <p class="cta__text px-80 lg:px-0 text-white">
                        <span>
                            Phone: <a href="https://wa.me/9613485555" class="text-xl" target="_blank">+961 3 48 55 55</a> | <a href="tel:+35799333005" class="text-xl">+357 99 333 005</a> | <a href="tel:+306909033203" class="text-xl">+30 6 90 90 33 203</a><br>
                            Email: <a href="mailto:marc@adwanrealestate.com">marc@adwanrealestate.com</a>
                        </span>
                    </p>

                    <div class="cta__button">
                        <a data-barba href="{{ route('contact_path') }}" class="button -md -white">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="layout-pt-lg layout-pb-lg bg-beige-light">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="sectionHeading -left-line">
                    <span class="sectionHeading__subtitle">BLOG</span>
                    <h2 class="sectionHeading__title">Latest News</h2>
                </div>
            </div>
        </div>

        <div class="row y-gap-32 layout-pt-sm">
            @foreach($news as $n)
            <div class="col-lg-4 col-md-6">
                @include('layouts.news-box')
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="modal" id="service-1" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row p-4">
                    <h6 class="mb-3">Residential Real Estate Project Development</h6>
                    <p class="text-3 mb-0">We create projects from A to Z. We do the market research, acquire the plot, and determine the ideal type of project and the marketing approach. We prepare the designs, from concept designs to construction drawings, obtain the necessary building permits and financing, build the structures, do the necessary construction management, oversee the construction and ultimately sell the project.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="service-2" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row p-4">
                    <h6 class="mb-3">Golden Visa Assistance</h6>
                    <p class="text-3 mb-0">The Greece Golden Visa Program is considered one of the most affordable residence by investment programs that provide access to Europe. Successful applicants and their families are able to benefit from visa-free access to Europe’s Schengen Area within two months of applying.<br>
                        Requirement: An investment in real estate property with a minimum value of EUR 250,000.<br>
                        According to a new law, the minimum investment will increase to EUR 500,000 on 2023, May 1st.<br>
                        Any purchase must be registered before April 30 in ordered to be locked for the Golden Visa.<br>
                        The advantages:</p>
                    <ul>
                        <li><p>Visa-free travel within Europe’s Schengen Area</p></li>
                        <li><p>No requirement to reside in Greece</p></li>
                        <li><p>Residence permits can be acquired within 30–60 days</p></li>
                        <li><p>Unlimited expiry date of residence permit</p></li>
                        <li><p>Opportunity to rent out the investment property</p></li>
                        <li><p>Residence applicable to the whole family (married spouse, children under 21 years old, and parents of the main applicant and spouse)</p></li>
                        <li><p>Eligibility to apply for citizenship after seven years of residence</p></li>
                        <li><p>Ability to hold shares and receive income from the dividends of a company registered in Greece (but not to be employed in Greece)</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="service-3" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row p-4">
                    <h6 class="mb-3">Interior Design and Furniture</h6>
                    <p class="text-3 mb-0">An Interior Design team will work closely with you, and try to capture the essence of your personality, your likes and dislikes in order to envision your dream home.<br>
                    We will help you choose from many different packages and many different selections so that the furniture is tailor made according to your taste. <br>
                    You can either choose to furnish the house for your own personal use or to go for our Ready-to-rent package, where every single item you need including towels, cutleries, cooking utensils so that your property is completely up and ready to be rented.<br>
                    We take care of the shipment, and installation of all the furniture, without the need of your physical presence.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="service-4" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row p-4">
                    <h6 class="mb-3">Rentals and Property Management</h6>
                    <p class="text-3 mb-0">Our Company’s main focus is to be fair and correct for everyone; and focus only on long term collaborations.<br>
                    For our guests: to offer good standard and well serviced properties, provide 5*professional service and support, extra services to enhance guests experience and their holidays and to ensure our guests are happy, enjoy their holidays, leave good reviews and become one of our many repeat customers.<br>
                    or our owners: to achieve most importantly the best rental income during the year; but equally important is to ensure the correct management and upkeep of the property with correct service and pricing. </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection