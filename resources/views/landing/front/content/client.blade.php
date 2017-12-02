@if(isset($clients) && is_object($clients))
<section class="page_section" id="clients"><!--client-->
    <h2>Clients</h2>
    <div class="client_logos">
        <div class="container">
            <ul class="fadeInRight animated wow">
                @foreach($clients as $client)
                <li>
                    <a href="javascript:void(0)">
                        {{ Html::image($client->image, $client->name) }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section><!--/client-->
@endif
