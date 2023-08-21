@extends("layouts.app")

@section("content")

<section class="page-masthead">
    <div data-parallax="0.6" class="page-masthead__bg">
        <div data-parallax-target class="bg-image js-lazy" data-bg="img/backgrounds/6.jpg"></div>
    </div>

    <div class="container">
        <div class="page-masthead__content">
            <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                    <div data-anim="slide-up delay-1">
                        <h1 class="page-masthead__title text-white">About Us</h1>
                    </div>
                </div>

                <div class="col-auto">
                    <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                        <a data-barba href="/" class="page-masthead-bread__item">Home</a>
                        /
                        <a data-barba href="#" class="page-masthead-bread__item">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about -->
<section class="layout-pt-lg overflow-visible z-2">
    <div class="container">
        <div data-anim-wrap class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="aboutBack sm:d-none">
                    <img src="img/general/large-logo.svg" alt="logo" />
                </div>

                <div data-anim-child="slide-right delay-8" class="sectionHeading -left-line -about pr-12 lg:pr-0">
                    <span class="sectionHeading__subtitle">OUR STORY</span>
                    <h2 class="sectionHeading__title">Get to know us</h2>
                    <p class="sectionHeading__text">
                        Founded in 2018 by Marc Adwan, the young entrepreneur has a Bachelor in Civil Engineering from the American University of Beirut, and a Masters in Construction Engineering and Management from Columbia University in the city of New York. <br>
                        After acquiring more than 10 years of experience in major projects in Africa and the Middle East, Marc decided to venture on his own by creating the investment group Kybana Group Ltd, and developing his first project in Cyprus: Azure.<br>
                        The outstanding success of the project allowed Marc to multiply his ventures, acquire new plots in the area, and start projects in Nicosia and Athens in only a few years time.
                    </p>
                </div>
            </div>

            <div class="col-xl-7 col-lg-6">
                <div class="overlayImgs md:mt-60">
                    <div data-anim-child="img-right cover-black" class="overlayImgs__back">
                        <img src="img/backgrounds/7.jpg" alt="Image" />
                    </div>

                    <div data-anim-child="img-right cover-black delay-3" class="overlayImgs__front -border">
                        <img src="img/backgrounds/2.jpg" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- counter -->
<section class="layout-pt-md layout-pb-md bg-grey counter__section">
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
                        28
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-grey">28</div>
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

<section class="banner relative layout-pt-lg layout-pb-lg">
    <div class="section-bg-image col-lg-6 px-0">
        <div class="bg-image js-lazy" data-bg="img/backgrounds/11.jpg"></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5 offset-lg-7">
                <div class="sectionHeading -left-line">
                    <h2 class="sectionHeading__title mt-16">
                        Real Estate Development
                    </h2>
                    <p class="sectionHeading__text mt-24">
                        We create projects from A to Z. We do the market research, acquire the plot, determine the ideal type of project and the marketing approach. We prepare the designs, from concept designs to construction drawings; obtain the necessary building permits and financing, build the structures, do the necessary project management, oversee the construction and ultimately sell the project.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- circle counter -->
<section class="layout-pt-md layout-pb-md bg-dark-img pattern_bg_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="sectionHeading -top-line text-center">
                    <span class="sectionHeading__subtitle">OUR SKILLS</span>
                    <h2 class="sectionHeading__title text-white">The Core Company Values</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center justify-content-md-between y-gap-48 layout-pt-sm">
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-5">
                <div class="pieChart text-center" data-percent="95" data-anim="pie-chart">
                    <div class="service__icon m-auto">
                        <i class="icon icon-cube text-beige"></i>
                    </div>
                    <div class="pieChart__content">
                        <h4 class="pieChart__title text-white pb-1">
                            Transparency
                        </h4>
                        <p class="pieChart__text text-white">
                            We believe in being honest and straightforward; transparancy is an ongoing process that brings ongoing results.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-5">
                <div class="pieChart text-center" data-percent="50" data-anim="pie-chart">
                    <div class="service__icon m-auto">
                        <i class="icon icon-cube text-beige"></i>
                    </div>
                    <div class="pieChart__content">
                        <h4 class="pieChart__title text-white pb-1">
                            Affordable Luxury
                        </h4>
                        <p class="pieChart__text text-white">
                            Our aim is to offer very high-quality finishings and materials, in prime locations, at competitive prices.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-5">
                <div class="pieChart text-center" data-percent="100" data-anim="pie-chart">
                    <div class="service__icon m-auto">
                        <i class="icon icon-cube text-beige"></i>
                    </div>
                    <div class="pieChart__content">
                        <h4 class="pieChart__title text-white pb-1">
                            State of the art Architecture
                        </h4>
                        <p class="pieChart__text text-white">
                            We collaborate with only the best architects and designers to provide to our clients the most beautiful architecture and state-of-the-art technology.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-5">
                <div class="pieChart text-center" data-percent="75" data-anim="pie-chart">
                    <div class="service__icon m-auto">
                        <i class="icon icon-cube text-beige"></i>
                    </div>
                    <div class="pieChart__content">
                        <h4 class="pieChart__title text-white pb-1">
                            Client Satisfaction
                        </h4>
                        <p class="pieChart__text text-white">
                            We go above and beyond to make sure our clients are nothing less than thrilled by our services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection