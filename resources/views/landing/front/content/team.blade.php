@if(isset($team) && is_object($team))
<section class="page_section team" id="team">
    <div class="container">
        <h2>Team</h2>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
        <div class="team_section clearfix">
            @foreach($team as $k => $one)
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-0{{ ($k*3+3) }}s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    {{ Html::image($one->image, $one->name) }}
                   <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                   </ul>
                </div>
                <h3 class="wow fadeInDown delay-0{{ ($k*3+3) }}s">{{ $one->name }}</h3>
                <span class="wow fadeInDown delay-0{{ ($k*3+3) }}s">{{ $one->position }}</span>
                <p class="wow fadeInDown delay-0{{ ($k*3+3) }}s">{!! $one->text !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
