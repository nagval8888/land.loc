@if ( isset($about) && is_object($about) )
    <section id="{{ $about->alias }}">
        <div class="inner_wrapper">
            <div class="container">
                <h2>{{ $about->name }}</h2>
                <div class="inner_section">
                    <div class="row">
                        <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                            {!! Html::image($about->image, $about->name,
                                ['class'=>'img-circle delay-03s animated wow zoomIn']
                            ) !!}
                        </div>
                        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                            <div class=" delay-01s animated fadeInDown wow animated">
                                {!! $about->text !!}
                            </div>
                            <div class="work_bottom">
                                <span>Want to know more..</span>
                                <a href="{{ route('about_page') }}" class="contact_btn">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
