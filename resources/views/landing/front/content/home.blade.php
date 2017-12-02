@if ( isset($home) && is_object($home) )
    <section id="{{ $home->alias }}" class="top_cont_outer">
        <div class="hero_wrapper">
            <div class="container">
                <div class="hero_section">
                    <div class="row">
                        <div class="col-lg-5 col-sm-7">
                            <div class="top_left_cont zoomIn wow animated">
                                {!! $home->text !!}
                                <a href="{{ route('home_page') }}" class="read_more2">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-5">
                            {!! Html::image($home->image, $home->name,
                                ['class'=>'img-circle delay-03s animated wow zoomIn']
                            ) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
