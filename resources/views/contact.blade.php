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
                        <div class="page-masthead__subtitle">Explore the features</div>
                        <h1 class="page-masthead__title text-white">Contact Us</h1>
                    </div>
                </div>

                <div class="col-auto">
                    <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                        <a data-barba href="/" class="page-masthead-bread__item">Home</a>
                        /
                        <a data-barba href="#" class="page-masthead-bread__item">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-lg layout-pb-xl md:pb-64">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-7 col-lg-7 z-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.678769765787!2d33.97811432683064!3d35.039765309651195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dfc5fbbcbca1f9%3A0x6ca56046cce9dbc9!2sAyiou%20Georgiou%2011%2C%20Paralimni%2C%20Cyprus!5e0!3m2!1sen!2slb!4v1663256839676!5m2!1sen!2slb" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-xl-4 col-lg-4 offset-lg-1">
                <div class="md:pt-40 md:pb-40">
                    <div class="sectionHeading -left-line">
                        <span class="sectionHeading__subtitle">OUR CONTACT DETAILS</span>
                        <h2 class="sectionHeading__title">Let's Start a Project</h2>
                    </div>

                    <div class="text-sm text-grey leading-4xl mt-48 md:mt-16">                    
                        <p><span class="float-left">T: </span>
                            <ul>
                                <li><p><a href="tel:+35799333005">+357 99 333 005</a></p></li>
                                <li><p><a href="tel:+306909033203">+30 6 90 90 33 203</a></p></li>
                                <li><p><a href="https://wa.me/9613485555" target="_blank">+961 3 48 55 55</a></p></li>
                            </ul>
                        </p>
                        <p>M: <a href="mailto:marc@adwanrealestate.com">marc@adwanrealestate.com</a></p>
                        <p>A: &nbsp;Ayiou Georgiou 11, Paralimni, Cyprus, Postal Code: 5310</p>
                    </div>

                    <div class="sectionHeading__button mt-24 md:mt-20 d-none d-md-block">
                        <a data-barba href="https://goo.gl/maps/PsuAzYdxiLTBuwFRA" target="_blank" class="button -simple text-grey">GET DIRECTIONS</a>
                    </div>

                    <div class="sectionHeading__button mt-24 md:mt-20 d-block d-md-none">
                        <a data-barba href="https://goo.gl/maps/PsuAzYdxiLTBuwFRA" target="_blank" class="button -md -dark text-white">GET DIRECTIONS</a>
                    </div>

                    <div class="socialsSection mt-24">
                        <a data-barba href="https://www.instagram.com/adwanrealestate/" target="_blank" class="text-accent">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a data-barba href="https://www.facebook.com/AdwanRealEstate/" target="_blank" class="text-accent">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-7 offset-lg-5 z-5">
                <div class="mt-minus-90 md:mt-0">
                    <div class="sectionHeading -left-line bg-dark py-48 px-48 md:py-20 md:px-20">
                        <span class="sectionHeading__subtitle text-white">CONTACT FORM</span>
                        <h2 class="sectionHeading__title text-white">Send a Message</h2>

                        <form class="-light row" action="{{route('contact_path')}}" id="contactform" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="js-input-group">
                                    <textarea name="message" rows="5" required placeholder="Your Message"></textarea>
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
                                    SEND MESSAGE
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