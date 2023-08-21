<div data-anim-wrap class="blog -hover">

    <a data-barba href="{{ route('news_details_path', $n->id) }}">
        <div class="blog__image">
            <div data-anim-child="img-right cover-black">
                <div>
                    <div class="ratio ratio-41:35">
                        <img class="ratio-img" src="/img/news/{{$n->img_1}}" alt="{{$n->title}}" />
                    </div>
                </div>
            </div>
        </div>
    </a>

    <div class="blog__content mt-20">
        @if($n->date)
        <div data-anim-child="slide-up delay-6" class="blog__info">
            <a data-barba href="{{ route('news_details_path', $n->id) }}">
                {{date('F, Y', strtotime($n->date))}}
            </a>
        </div>
        @endif

        <div data-anim-child="slide-up delay-7">
            <a data-barba href="{{ route('news_details_path', $n->id) }}">
                <h3 class="blog__title text-black pr-60 lg:pr-0">{{$n->title}}</h3>
            </a>
        </div>

        <div data-anim-child="slide-up delay-8">
            <a data-barba href="{{ route('news_details_path', $n->id) }}" class="blog__button button -simple text-black">Read more</a>
        </div>
    </div>

</div>