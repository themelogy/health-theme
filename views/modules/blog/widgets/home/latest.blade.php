<section class="slider_team bg_transparent bg_9">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block">{!! trans('themes::theme.news title') !!}</h2>
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
                    @foreach($posts as $post)
                        @if($image = $post->present()->firstImage(250,250,'fit',80))
                            <li class="slide">
                                <img src="{{ $image }}" alt="{{ $post->title }}" />
                                <span class="name">{{ $post->title }}</span>
                                <span class="category">{{ strip_tags(Str::words($post->content, 10)) }}</span>
                                <a href="{{ $post->url }}" class="btn btn_small">{{ trans('global.buttons.read more') }}</a>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
