<section class="slider_team bg_transparent bg_9" id="instagram">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block">{!! trans('themes::theme.instagram title') !!}</h2>
                <div class="ui-subtitle-block">{{ trans('themes::theme.instagram sub title') }}</div>
                <ul class="bxslider"
                    data-max-slides="4"
                    data-min-slides="1"
                    data-width-slides="270"
                    data-margin-slides="30"
                    data-auto-slides="true"
                    data-move-slides="1"
                    data-infinite-slides="true"
                    data-pager="true"
                    data-controls="false">
                    @foreach($instagram_posts as $post)
                    <li class="slide"><img src="{{ $post->images->low_resolution->url }}" height="250" width="250" alt="Foto" style="max-height:250px;" /></span> <span class="category">@if(isset($post->caption->text)) {{ strip_tags(\Illuminate\Support\Str::words($post->caption->text, 20)) }} @endif</span> <a target="_blank" href="{{ $post->link }}" class="btn btn_small">{{ trans('themes::theme.read more') }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end slider_team -->