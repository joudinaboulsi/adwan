@extends("layouts.app")

@section("content")

<section class="page-masthead">
    <div data-parallax="0.6" class="page-masthead__bg">
        <div data-parallax-target class="bg-image js-lazy" data-bg="img/backgrounds/11.jpg"></div>
    </div>

    <div class="container">
        <div class="page-masthead__content">
            <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                    <div data-anim="slide-up delay-1">
                        <div class="page-masthead__subtitle">OUR WORKS</div>
                        <h1 class="page-masthead__title text-white">Projects List</h1>
                    </div>
                </div>

                <div class="col-auto">
                    <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                        <a data-barba href="/" class="page-masthead-bread__item">Home</a>
                        /
                        <a data-barba href="#" class="page-masthead-bread__item">Projects List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-lg layout-pb-lg project-sections">


    <div class="project-title">
        <h2>Greece</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="project">
                <div class="col-lg-4">
                    <a href="{{route('damareos_path')}}">
                    <div class="image">
                        <a href="{{ route('damareos_path') }}">
                        <img src="{{asset('img/damareos/01_Elevation.jpg')}}" alt="Portfolio image" />
                        {{-- <div class="sold-out-banner">Sold</div> --}}
                    </div>
                     </a>
                    <h5 class="grid__title text-black title-image">Damareos 59</h5>
                    <a data-barba href="{{ route('damareos_path') }}"
                        class="grid__button button -simple text-black mt-16">VIEW MORE</a>
                </div>
                <div class="col-lg-4">
                    <a href="{{route('iliados_path')}}">
                    <div class="image">
                        <img src="{{asset('img/portfolio/fancy/iliados.jpg')}}" alt="Portfolio image" />
                        <div class="sold-out-banner">Sold</div>
                    </div>
                 </a>
                    <h5 class="grid__title text-black title-image">Iliados 3</h5>
                    <a data-barba href="{{ route('iliados_path') }}"
                        class="grid__button button -simple text-black mt-16">VIEW MORE</a>
                </div>
                <div class="col-lg-4">
                    <a href="{{ route('frinis_path') }}">
                        <div class="image">
                            <img src="{{asset('img/Frinis 38/Dining.jpg')}}" alt="Portfolio image" />
                            <div class="sold-out-banner">Sold</div>
                        </div>
                    </a>
                    <h5 class="grid__title text-black title-image">Frinis 38</h5>
                    <a data-barba href="{{ route('frinis_path') }}"
                        class="grid__button button -simple text-black mt-16">VIEW
                        MORE</a>
                </div>

            </div>

            <div class="project">

                <div class="col-lg-4">
                    <a href="{{route('damagitou_path')}}"><div class="image">
                        <img src="{{asset('img/Damagitou 5/Dining 02.jpg')}}" alt="Portfolio image" />
                        <div class="sold-out-banner">Sold</div>
                    </div></a>

                    <h5 class="grid__title text-black title-image">Damagitou 5</h5>
                    <a data-barba href="{{route('damagitou_path')}}" class="grid__button button -simple text-black mt-16">VIEW
                        MORE</a>
                </div>


            </div>

        </div>
</section>
<section class="layout-pt-lg layout-pb-lg project-sections">


    <div class="project-title">
        <h2> Cyprus</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="project">
                <div class="col-lg-4">
                    <a href="{{ route('downtown_path') }}">
                        <div class="image">
                            <img src="{{asset('img/portfolio/fancy/iliados.jpg')}}" alt="Portfolio image" />
                            {{-- <div class="sold-out-banner">Sold</div> --}}
                        </div>
                    </a>
                    <h5 class="grid__title text-black title-image">Down Town Views</h5>



                    <a data-barba href="{{ route('downtown_path') }}"
                        class="grid__button button -simple text-black mt-16">VIEW MORE</a>
                </div>

                <div class="col-lg-4">
                    <a href="{{ route('bluhorizon_path') }}">
                        <div class="image">
                            <img src="img/portfolio/fancy/bluhorizon.jpg" alt="Portfolio image" />
                            {{-- <div class="sold-out-banner">Sold</div> --}}
                        </div>
                    </a>
                    <h5 class="grid__title text-black title-image">Blu&nbsp;Horizon</h5>
                    <a data-barba href="{{ route('bluhorizon_path') }}"
                        class="grid__button button -simple text-black mt-16">VIEW MORE</a>
                </div>
                <div class="col-lg-4">
                    <a href="{{ route('iliados_path') }}">
                        <a href="{{ route('illido_path') }}">
                            <div class="image">
                                <img src="{{asset('img/portfolio/fancy/iliados.jpg')}}" alt="Portfolio image" />
                                {{-- <div class="sold-out-banner">Sold</div> --}}
                            </div>
                        </a>
                    </a>

                    <h5 class="grid__title text-black title-image">Il&nbsp;Lido</h5>
                    <a data-barba href="{{ route('illido_path') }}"
                        class="grid__button button -simple text-black mt-16">VIEW MORE</a>
                </div>


            </div>
            <div class="project">
                <div class="col-lg-4">
                    <a href="{{ route('azure_path') }}">
                        <div class="image">
                          <img src="img/portfolio/fancy/azure.jpg" alt="Portfolio image" />
                            <div class="sold-out-banner">Sold</div>
                        </div>
                    </a>
                    <h5 class="grid__title text-black title-image">
                    Azure</h5>



                   <a data-barba href="{{ route('azure_path') }}" class="grid__button button -simple text-black mt-16">VIEW MORE</a>
                </div>

            </div>
</section>
@endsection