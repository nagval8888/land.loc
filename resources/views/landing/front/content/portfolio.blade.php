@if(isset($portfolio) && is_object($portfolio))
<section id="portfolio" class="content"><!-- Portfolio -->
    <div class="container portfolio_title">
        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
    </div>
    <div class="portfolio-top"></div>

    <div class="portfolio"><!-- Portfolio Filters -->
        @if(!empty($tags))
        <div id="filters" class="sixteen columns"><!-- Portfolio Filter -->
            <ul class="clearfix">
                <li>
                    <a id="all" href="#" data-filter="*" class="active">
                        <h5>All</h5>
                    </a>
                </li>
                @foreach($tags as $tag)
                    <li>
                        <a class="" href="#" data-filter=".{{ $tag }}">
                            <h5>{{ $tag }}</h5>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div><!--/Portfolio Filter -->
        @endif

        <!-- Portfolio Wrapper -->
        <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
            @foreach($portfolio as $item)
            <!-- Portfolio Item -->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four {{ $item->filter }} isotope-item">
                <div class="portfolio_img">
                    {{ Html::image($item->image, $item->name) }}
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">{{ $item->name }}</h4>
                    </div>
                </div>
            </div><!--/Portfolio Item -->
            @endforeach
        </div><!--/Portfolio Wrapper -->

    </div><!--/Portfolio Filters -->

    <div class="portfolio_btm"></div>

    <div id="project_container">
        <div class="clear"></div>
        <div id="project_data"></div>
    </div>
</section><!--/Portfolio -->
@endif
