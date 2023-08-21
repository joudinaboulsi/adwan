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
                        <div class="page-masthead__subtitle">Join the team</div>
                        <h1 class="page-masthead__title text-white">Work With Us</h1>
                    </div>
                </div>

                <div class="col-auto">
                    <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                        <a data-barba href="/" class="page-masthead-bread__item">Home</a>
                        /
                        <a data-barba href="#" class="page-masthead-bread__item">Work With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-lg layout-pb-xl md:pb-64">
    <div class="container">
        <div class="row no-gutters align-items-end justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="about-me">
                    <div class="sectionHeading -left-line bg-beige-dark py-80 px-64 sm:py-48 sm:px-32">
                        <span class="sectionHeading__subtitle text-white">JOIN THE TEAM</span>
                        <h2 class="sectionHeading__title text-white">Send your CV</h2>
                        <p class="sectionHeading__text text-white mt-20 mr-100">
                            Are you seeking a career that offers the opportunity for challenge and advancement? A job filled with interesting work? A place where you can make a difference in the lives of others? Send your CV and join our team.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-6">
                <div class="ml-minus-col-1 mb-minus-lg md:ml-0 md:mb-0">
                    <div class="sectionHeading -left-line bg-dark py-48 px-48 md:py-20 md:px-20">
                        <span class="sectionHeading__subtitle text-white">APPLICATION FORM</span>
                        <h2 class="sectionHeading__title text-white">Send your CV</h2>

                        <form class="-light row" action="{{route('work_path')}}" id="contactform" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <div class="js-input-group">
                                    <textarea name="message" rows="5" required placeholder="Your Message"></textarea>
                                    <span class="form__error"></span>
                                </div>
                            </div>
                            <div class="col-12 mt-20">
                                <div class="js-input-group">
                                    <input type="file" name="file" required placeholder="Your CV" />
                                    <span class="form__error"></span>
                                </div>
                            </div>
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
                                    <input type="text" name="phone" placeholder="Your Phone Number" />
                                </div>
                            </div>

                            <div class="col-12 mt-32">
                                <button type="submit" name="submit" class="button -md -accent text-white">
                                    SEND APPLICATION
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection